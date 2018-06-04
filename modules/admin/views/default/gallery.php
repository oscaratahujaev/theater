<?php

use app\components\Functions;
use johnitvn\ajaxcrud\CrudAsset;
use kartik\grid\GridView;
use mihaildev\elfinder\InputFile;
use yii\bootstrap\Modal;
use yii\helpers\Html;

$this->title = Yii::t('main', 'Галерея');
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">

    <div class="col-md-12">
        <h3 class="text-center">Галерея</h3>
    </div>
    <?= InputFile::widget([
        'language' => 'ru',
        'controller' => 'elfinder', // вставляем название контроллера, по умолчанию равен elfinder
        //        'filter' => 'image',    // фильтр файлов, можно задать массив фильтров https://github.com/Studio-42/elFinder/wiki/Client-configuration-options#wiki-onlyMimes
        'name' => 'myinput',
        'template' => '<div class="">{button}</div>',
        'buttonOptions' => ['class' => 'btn btn-success btn-block', 'style' => 'display:block'],
    ]);
    ?>


    <?php
    $images = Functions::listGalleryFiles();
    ?>


    <div class="admin-image">
        <h3>Фото</h3>
        <?php foreach ($images as $img): ?>
            <img src="<?= $img['path'] ?>" title="<?= $img['filename'] ?>" class="img-thumbnail img-container">
        <?php endforeach; ?>
    </div>


    <?php
    $videos = Functions::listGalleryVideo();
    ?>


    <div class="admin-image">
        <h3>Видео</h3>
        <?php foreach ($videos as $item): ?>
            <video width="400" controls>
                <source src="<?= $item['path'] ?>">
            </video>
        <?php endforeach; ?>
    </div>

</div>

