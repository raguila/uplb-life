<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\PaymentsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="payments-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'UnitID')->dropDownList(
        ArrayHelper::map($units, 'UnitID', 'UnitName'),
        ['prompt' => '-- Select a Unit --']
    ); ?>

    <?= $form->field($model, 'TenantID')->dropDownList(
        ArrayHelper::map($tenants, 'TenantID', 'TenantName'),
        ['prompt' => '-- Select a Tenant --']
    ); ?>

    <?= $form->field($model, 'Month')->dropDownList($months, ['prompt' => '-- Select Month --']) ?>

    <?= $form->field($model, 'Year')->textInput() ?>

    <?php // echo $form->field($model, 'UnitID') ?>

    <?php // echo $form->field($model, 'Amount') ?>

    <?php // echo $form->field($model, 'Description') ?>

    <?php // echo $form->field($model, 'ModeOfPayment') ?>

    <?php // echo $form->field($model, 'Month') ?>

    <?php // echo $form->field($model, 'Year') ?>

    <?php // echo $form->field($model, 'DatePaid') ?>

    <?php // echo $form->field($model, 'Remarks') ?>

    <div class="clear-float"></div>

    <div class="submit-reset-buttons">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
