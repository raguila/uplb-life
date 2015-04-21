<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Tenants */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tenants-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'TenantName')->textInput(['maxlength' => 30]) ?>

    <?= $form->field($model, 'Gender')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'Birthdate')->textInput() ?>

    <?= $form->field($model, 'Age')->textInput() ?>

    <?= $form->field($model, 'Course')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'Job')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'Picture')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'UnitID')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
