<?php

namespace app\controllers;

use app\components\Functions;
use app\models\Performance;
use yii\web\Controller;

class PerformanceController extends Controller
{
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
        return $this->render('view', [
            'performance' => $performance,
            'files' => $files
        ]);
    }

}
