<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Units;

/* @var $this yii\web\View */
/* @var $model app\models\Payments */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="payments-form">

    <?php $form = ActiveForm::begin(); ?>

     <?= $form->field($model, 'TenantID')->dropDownList(
        ArrayHelper::map($tenants, 'TenantID', 'TenantName'),
        ['prompt' => '-- Select a Tenant --']
     ); ?>

    <?= $form->field($model, 'HouseID', ['template' => "{input}",])->hiddenInput() ?>

    <?= $form->field($model, 'UnitID')->dropDownList(
        ArrayHelper::map($units, 'UnitID', 'UnitName'),
        ['prompt' => '-- Select a Unit --']
    ); ?>

    <?= $form->field($model, 'Amount')->textInput() ?>

    <?= $form->field($model, 'Description')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'ModeOfPayment')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'Month')->dropDownList($months) ?>

    <?= $form->field($model, 'Year')->textInput() ?>

    <?= $form->field($model, 'DatePaid')->widget(\yii\jui\DatePicker::classname(), [
        'language' => 'en',
        'dateFormat' => 'yyyy-MM-dd',
    ]) ?>

    <?= $form->field($model, 'Remarks')->textArea(['maxlength' => 160]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
