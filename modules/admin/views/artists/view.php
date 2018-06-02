<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Artists */
?>
<div class="artists-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'fullname',
            'description:ntext',
            'photo_path',
            'photo_name',
        ],
    ]) ?>

</div>
