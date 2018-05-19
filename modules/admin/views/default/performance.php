<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\Modal;
use kartik\grid\GridView;
use johnitvn\ajaxcrud\CrudAsset;
use johnitvn\ajaxcrud\BulkButtonWidget;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\PerformanceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('main', 'Спектакли');
$this->params['breadcrumbs'][] = $this->title;

CrudAsset::register($this);

?>
<div class="performance-index">
    <div id="ajaxCrudDatatable">
        <?= GridView::widget([
            'id' => 'crud-datatable',
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'pjax' => true,

            'columns' => require(__DIR__ . '/../performance/_columns.php'),
            'toolbar' => [
                ['content' =>
                    Html::a('<i class="glyphicon glyphicon-plus"></i>', ['performance/create'],
                        ['role' => 'modal-remote', 'title' => 'Create new Performances', 'class' => 'btn btn-default']) .
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
