<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Houses */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="houses-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'HouseName')->textInput(['maxlength' => 30]) ?>

    <?= $form->field($model, 'HouseDescription')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'Address')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'Caretaker')->textInput(['maxlength' => 30]) ?>

    <?= $form->field($model, 'ContactNo')->textInput() ?>

    <?= $form->field($model, 'Long')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'Lat')->textInput(['maxlength' => 10]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
