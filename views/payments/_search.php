<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PaymentsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="payments-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'PaymentID') ?>

    <?= $form->field($model, 'DateCreated') ?>

    <?= $form->field($model, 'DateUpdated') ?>

    <?= $form->field($model, 'UnitID') ?>

    <?= $form->field($model, 'Amount') ?>

    <?php // echo $form->field($model, 'Description') ?>

    <?php // echo $form->field($model, 'ModeOfPayment') ?>

    <?php // echo $form->field($model, 'Month') ?>

    <?php // echo $form->field($model, 'Year') ?>

    <?php // echo $form->field($model, 'DatePaid') ?>

    <?php // echo $form->field($model, 'Remarks') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
