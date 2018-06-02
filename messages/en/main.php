<?php
/**
 * Created by PhpStorm.
 * User: ali
 * Date: 6/30/17
 * Time: 5:27 PM
 */


use app\models\Translations;
use yii\helpers\ArrayHelper;

return ArrayHelper::map(Translations::find()->all(), 'code', 'name_en');