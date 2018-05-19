<?php

namespace app\controllers;

use yii\web\Controller;

class MainController extends Controller
{
//    public $layout = "main";

    public function actionIndex()
    {
        $this->layout = "main";
        return $this->render('index');
    }

}
