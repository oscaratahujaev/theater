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
    [
        'class' => '\kartik\grid\DataColumn',
        'attribute' => 'title',
    ],
    //    [
    //        'class'=>'\kartik\grid\DataColumn',
    //        'attribute'=>'description',
    //    ],
    [
        'class' => '\kartik\grid\DataColumn',
        'attribute' => 'author',
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
        'controller' => 'performance',
        'dropdown' => false,

        'vAlign' => 'middle',
        'urlCreator' => function ($action, $model, $key, $index) {
            return Url::to(['performance/' . $action, 'id' => $key]);
        },
        'viewOptions' => ['title' => 'View', 'data-toggle' => 'tooltip'],
        'updateOptions' => ['role' => 'modal-remote', 'title' => 'Update', 'data-toggle' => 'tooltip'],
        'deleteOptions' => ['role' => 'modal-remote', 'title' => 'Delete',
            'data-confirm' => false, 'data-method' => false,// for overide yii data api
            'data-request-method' => 'post',
            'data-toggle' => 'tooltip',
            'data-confirm-title' => 'Are you sure?',
            'data-confirm-message' => 'Are you sure want to delete this item'],
    ],

];   