<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Translations */
?>
<div class="translations-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'code',
            'name_ru',
            'name_uz',
        ],
    ]) ?>

</div>
