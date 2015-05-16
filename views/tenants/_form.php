<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Tenants */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tenants-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'TenantName')->textInput(['maxlength' => 50]) ?>

    <?php /*$form->field($model, 'Gender')->textInput(['maxlength' => 10]) */?>
    <?= $form->field($model, 'Gender')->radioList(['M' => 'Male', 'F' => 'Female']) ?>

    <?php /*$form->field($model, 'Birthdate')->textInput() */?>
    <?= $form->field($model, 'Birthdate')->widget(\yii\jui\DatePicker::classname(), [
    'language' => 'en',
    'dateFormat' => 'yyyy-MM-dd',
]) ?>

    <?= $form->field($model, 'Course')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'Job')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'Picture')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'UnitID')->textInput() ?>

    <?= $form->field($model, 'IDNumber')->textInput(['maxlength' => 15]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
