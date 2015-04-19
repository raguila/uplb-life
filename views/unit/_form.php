<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Units */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="units-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'UnitName')->textInput(['maxlength' => 30]) ?>

    <?= $form->field($model, 'UnitDescription')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'NumberOfTenants')->textInput() ?>

    <?= $form->field($model, 'HouseID')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
