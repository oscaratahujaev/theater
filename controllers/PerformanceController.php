<?php

namespace app\controllers;

use app\components\Functions;
use app\models\Artists;
use app\models\Performance;
use app\models\PerformanceArtist;
use Codeception\Actor;
use yii\web\Controller;

class PerformanceController extends Controller
{
    public $layout = "main";

    public function actionIndex()
    {
        $performances = Performance::find()->where(['status' => 1])->all();
        return $this->render('index', [
            'performances' => $performances
        ]);
    }

    public function actionView($id)
    {
        $performance = Performance::find()->where(['id' => $id])->one();
        $files = Functions::listPerformanceFiles($performance->title);



        $actors = PerformanceArtist::find()->where(['performance_id' => $performance->id])->with('artist')->all();
//        debug($actors);
//        exit;
        return $this->render('view', [
            'performance' => $performance,
            'files' => $files,
            'artists' => $actors,
        ]);
    }

}
