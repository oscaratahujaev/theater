<?php
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PerformanceArtist */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="performance-artist-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'artist_id')->dropDownList(ArrayHelper::map(\app\models\Artists::find()->all(), 'id', 'fullname')) ?>


    <?php if (!Yii::$app->request->isAjax) { ?>
        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? Yii::t('main', 'Create') : Yii::t('main', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
    <?php } ?>

    <?php ActiveForm::end(); ?>

</div>
