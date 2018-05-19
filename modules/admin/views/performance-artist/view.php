<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PerformanceArtist */
?>
<div class="performance-artist-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'performance_id',
            'artist_id',
        ],
    ]) ?>

</div>
