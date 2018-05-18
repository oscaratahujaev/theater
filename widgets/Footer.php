<?php
/**
 * Created by PhpStorm.
 * User: m_toshpolatov
 * Date: 18.05.2018
 * Time: 9:51
 */

namespace app\widgets;


use yii\base\Widget;

class Footer extends Widget
{
    public function run()
    {
        return $this->render('footer');
    }

}