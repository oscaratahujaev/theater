<?php
/**
 * Created by PhpStorm.
 * User: a_atahujaev
 * Date: 23.05.2018
 * Time: 11:01
 */

namespace app\widgets;


use app\models\Lang;
use yii\base\Widget;

class WLang extends Widget
{
    public function init() { }

    public function run()
    {
        return $this->render('lang', [
            'current' => Lang::getCurrent(),
            'langs' => Lang::find()->where('id != :current_id', [':current_id' => Lang::getCurrent()->id])->all(),
        ]);
    }
}
