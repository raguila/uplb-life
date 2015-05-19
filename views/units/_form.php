<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Units */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="units-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php if($isAdmin) { 
        //If Admin is logged in, they can choose which house to add the unit to.
        //Otherwise, HouseManagers can only add units to their own houses
        echo $form->field($model, 'HouseID')->dropDownList(
        ArrayHelper::map($houses, 'HouseID', 'HouseName'),
        ['prompt' => '-- Select a House --']);

    } else {
        echo $form->field($model, 'HouseID', ['template' => "{input}",])->hiddenInput();
    } ?>

    <?= $form->field($model, 'UnitName')->textInput(['maxlength' => 30]) ?>

    <?= $form->field($model, 'UnitDescription')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'MaxNumberOfTenants')->textInput() ?>

    <?= $form->field($model, 'MonthlyRatePerPerson')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
