<?php
/**
 * Created by PhpStorm.
 * User: m_toshpolatov
 * Date: 18.05.2018
 * Time: 9:48
 */

namespace app\widgets;


use yii\bootstrap\Widget;

class Navbar extends Widget
{
    public function run()
    {
        return $this->render('navbar');
    }
}