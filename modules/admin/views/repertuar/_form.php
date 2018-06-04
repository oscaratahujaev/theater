<?php
use kartik\date\DatePicker;
use kartik\datetime\DateTimePicker;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Repertuar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="repertuar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'performance_id')->dropDownList(
        ArrayHelper::map(\app\models\Performance::find()->all(), 'id', 'title_ru')
    ) ?>

    <?php
    echo $form->field($model, 'date')->widget(DateTimePicker::classname(), [
        'options' => ['placeholder' => 'Выберите число'],
        'pluginOptions' => [
            'format' => 'yyyy-mm-dd hh:ii',
            'todayHighlight' => true,
            'autoclose' => true,
        ]
    ]);


    ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList(\app\components\Functions::getStatus()) ?>


    <?php if (!Yii::$app->request->isAjax) { ?>
        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? Yii::t('main', 'Create') : Yii::t('main', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
    <?php } ?>

    <?php ActiveForm::end(); ?>

</div>
