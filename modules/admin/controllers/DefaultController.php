<?php

namespace app\modules\admin\controllers;

use app\models\search\PerformanceSearch;
use app\models\search\RepertuarSearch;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;

/**
 * Default controller for the `admin` module
 */
class DefaultController extends Controller
{
    public $layout = "default";

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionRepertuar()
    {
        $searchModel = new RepertuarSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('repertuar', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionPerformance()
    {
        $searchModel = new PerformanceSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('performance', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);

    }

    public function actionGallery()
    {
        return $this->render('gallery');

    }
}
