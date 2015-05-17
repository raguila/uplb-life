<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Payments */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="payments-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'DateCreated')->textInput() ?>

    <?= $form->field($model, 'DateUpdated')->textInput() ?>

    <?= $form->field($model, 'UnitID')->textInput() ?>

    <?= $form->field($model, 'HouseID')->textInput() ?>

    <?= $form->field($model, 'Amount')->textInput() ?>

    <?= $form->field($model, 'Description')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'ModeOfPayment')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'Month')->textInput() ?>

    <?= $form->field($model, 'Year')->textInput() ?>

    <?= $form->field($model, 'DatePaid')->textInput() ?>

    <?= $form->field($model, 'Remarks')->textInput(['maxlength' => 160]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
