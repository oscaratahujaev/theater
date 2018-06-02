<?php

use app\components\Functions;
use mihaildev\elfinder\InputFile;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Performance */

$this->title = Yii::t('main', 'Спектакль') . ": " . $model->title;
$this->params['breadcrumbs'][] = [
    'label' => Yii::t('main', 'Спектакли'),
    'url' => ['default/performance']
];
$this->params['breadcrumbs'][] = $this->title;
?>
<h2 class="text-center"><?= $model->title ?>
    <?= Html::a('<i class="glyphicon glyphicon-pencil"></i>', [
        'performance/update', 'id' => $model->id
    ], [
        'class' => 'btn btn-primary pull-right',
        'role' => 'modal-remote',
    ]) ?>
</h2>
<div class="performance-view">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'title',
            'title_uz',
            [
                'attribute' => 'description',
                'format' => 'raw',
            ],

            'author',
        ],
    ]) ?>

    <div class="row">

        <div class="col-md-12">
            <h3 class="text-center">Актёры</h3>
            <?= $this->render('../performance-artist/index', [
                'searchModel' => $artistSearchModel,
                'dataProvider' => $artistDataProvider,
                'performanceId' => $model->id,
            ]) ?>
        </div>
    </div>


    <div class="row">

        <div class="col-md-12">
            <h3 class="text-center">Фото</h3>
        </div>
        <?= InputFile::widget([
            'language' => 'ru',
            'controller' => 'elfinder', // вставляем название контроллера, по умолчанию равен elfinder
            'filter' => 'image',    // фильтр файлов, можно задать массив фильтров https://github.com/Studio-42/elFinder/wiki/Client-configuration-options#wiki-onlyMimes
            'name' => 'myinput',
            'template' => '<div class="">{button}</div>',
            'buttonOptions' => ['class' => 'btn btn-success btn-block', 'style' => 'display:block'],
        ]);
        ?>

        <?php
        $images = Functions::listPerformanceFiles($model->title);
        ?>


        <div class="admin-image">
            <?php foreach ($images as $img): ?>
                <img src="<?= $img['path'] ?>" title="<?= $img['filename'] ?>" class="img-thumbnail img-container">
            <?php endforeach; ?>
        </div>

    </div>


</div>

