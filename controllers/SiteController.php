<?php

namespace app\controllers;

use app\components\Functions;
use app\models\Artists;
use app\models\Performance;
use app\models\Repertuar;
use app\models\SignupForm;
use app\models\User;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $this->layout = "home.php";

        $performances = Performance::find()->where(['status' => 1])->limit(3)->all();
        $repertoires = Repertuar::find()->where(['status' => 1])->limit(4)->all();
        $actors = Artists::find()->all();
        return $this->render('index', [
            'performances' => $performances,
            'repertoires' => $repertoires,
            'artists' => $actors,
        ]);
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        $this->layout = "../../modules/admin/views/layouts/default";
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionSignup()
    {
        $this->layout = "../../modules/admin/views/layouts/default";

        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {

                $duration = 3600 * 24; // one day
                if (Yii::$app->getUser()->login($user, $duration)) {
                    Yii::$app->session->setFlash('warning', User::MESSAGE_REGISTERED_NOT_CONFIRMED);
                    return $this->goHome();
                } else {
                    return $this->render('signup', [
                        'model' => $model,
                    ]);
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }


    public function actionRepertoire()
    {
        $repertiore = Repertuar::find()->select(['MONTH(date)'])->where(['status' => Functions::STATUS_ACTIVE])->orderBy('date ASC')->all();


        $db = Yii::$app->getDb();
        $query = $db->createCommand("SELECT *, p.title, p.title_uz,  MONTH(r.date) AS month FROM repertuar r JOIN performance p ON r.performance_id = p.id ORDER BY r.date;");
        $data = $query->queryAll();
        $repertuars = [];
        for ($i = 1; $i < 13; $i++) {
            foreach ($data as $item) {
                if ($item['month'] == $i) {
                    $repertuars[$i]['values'][] = $item;
                }
            }
        }

//        debug($repertuars);
//        die();

        return $this->render('repertiore', [
            'repertiores' => $repertuars,
        ]);
    }


    public function actionGallery()
    {
        $files = Functions::listGalleryFiles();
        return $this->render('gallery', [
            'files' => $files,
        ]);
    }
}
