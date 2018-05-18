<?php
/**
 * Created by PhpStorm.
 * User: m_toshpolatov
 * Date: 18.05.2018
 * Time: 11:26
 */

namespace app\widgets;


use yii\bootstrap\Widget;

class Header extends Widget
{
    public function run()
    {
        return $this->render('header');
    }

}