<?php
use app\components\Functions;
use yii\helpers\Url;

return [
    [
        'class' => 'kartik\grid\CheckboxColumn',
        'width' => '20px',
    ],
    [
        'class' => 'kartik\grid\SerialColumn',
        'width' => '30px',
    ],
    // [
    // 'class'=>'\kartik\grid\DataColumn',
    // 'attribute'=>'id',
    // ],
    [
        'class' => '\kartik\grid\DataColumn',
        'attribute' => 'performance_id',
        'filter'=>\yii\helpers\ArrayHelper::map(\app\models\Performance::find()->all(),'id','title'),
        'value' => function ($data) {
            return $data->performance ? $data->performance->title : "";
        }
    ],
    [
        'class' => '\kartik\grid\DataColumn',
        'attribute' => 'date',
    ],
    [
        'class' => '\kartik\grid\DataColumn',
        'attribute' => 'status',
        'filter' => Functions::getStatus(),
        'value' => function ($data) {
            return $data->status ? $data->status_->name : "";
        }

    ],
    [
        'class' => 'kartik\grid\ActionColumn',
        'dropdown' => false,
        'vAlign' => 'middle',
        'urlCreator' => function ($action, $model, $key, $index) {
            return Url::to(['repertuar/' . $action, 'id' => $key]);
        },
        'viewOptions' => ['role' => 'modal-remote', 'title' => 'View', 'data-toggle' => 'tooltip'],
        'updateOptions' => ['role' => 'modal-remote', 'title' => 'Update', 'data-toggle' => 'tooltip'],
        'deleteOptions' => ['role' => 'modal-remote', 'title' => 'Delete',
            'data-confirm' => false, 'data-method' => false,// for overide yii data api
            'data-request-method' => 'post',
            'data-toggle' => 'tooltip',
            'data-confirm-title' => 'Are you sure?',
            'data-confirm-message' => 'Are you sure want to delete this item'],
    ],

];   