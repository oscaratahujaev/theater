<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Repertuar */
?>
<div class="repertuar-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'performance_id',
            'date',
            'price',
            'status',
        ],
    ]) ?>

</div>
