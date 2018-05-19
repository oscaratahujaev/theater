<?php

use johnitvn\ajaxcrud\CrudAsset;
use kartik\grid\GridView;
use yii\bootstrap\Modal;
use yii\helpers\Html;

$this->title = Yii::t('main', 'Репертуар');
$this->params['breadcrumbs'][] = $this->title;

CrudAsset::register($this);

?>
<div class="repertuar-index">
    <div id="ajaxCrudDatatable">
        <?= GridView::widget([
            'id' => 'crud-datatable',
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'pjax' => true,
            'columns' => require(__DIR__ . '/../repertuar/_columns.php'),
            'toolbar' => [
                ['content' =>
                    Html::a('<i class="glyphicon glyphicon-plus"></i>', ['repertuar/create'],
                        ['role' => 'modal-remote', 'title' => 'Create new Repertuars', 'class' => 'btn btn-default']) .
                    Html::a('<i class="glyphicon glyphicon-repeat"></i>', [''],
                        ['data-pjax' => 1, 'class' => 'btn btn-default', 'title' => 'Reset Grid']) .
                    '{toggleData}' .
                    '{export}'
                ],
            ],
            'striped' => true,
            'condensed' => true,
            'responsive' => true,
            'panel' => [
                'type' => 'primary',
            ]
        ]) ?>
    </div>
</div>
<?php Modal::begin([
    "id" => "ajaxCrudModal",
    "footer" => "",// always need it for jquery plugin
]) ?>
<?php Modal::end(); ?>
