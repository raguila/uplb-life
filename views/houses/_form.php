<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Houses */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="houses-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'HouseName')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'HouseDescription')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'HouseType')->textInput(['maxlength' => 15]) ?>

    <?= $form->field($model, 'Address')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'Caretaker')->textInput(['maxlength' => 30]) ?>

    <?= $form->field($model, 'ContactNo')->textInput(['maxlength' => 15]) ?>

    <?= $form->field($model, 'Price')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'Size')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'Distance')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'Long')->textInput() ?>

    <?= $form->field($model, 'Lat')->textInput() ?>

    <?= $form->field($model, 'Featured')->textInput() ?>

    <?= $form->field($model, 'HasWifi')->textInput() ?>

    <?= $form->field($model, 'HasAirConditioningUnit')->textInput() ?>

    <?= $form->field($model, 'HasCurfew')->textInput() ?>

    <?= $form->field($model, 'PetsAllowed')->textInput() ?>

    <?= $form->field($model, 'VisitorsAllowed')->textInput() ?>

    <?= $form->field($model, 'SmokingAllowed')->textInput() ?>

    <?= $form->field($model, 'DrinkingAllowed')->textInput() ?>

    <?= $form->field($model, 'IsInsideUPLB')->textInput() ?>

    <?= $form->field($model, 'IsLowerCampus')->textInput() ?>

    <?= $form->field($model, 'IsUpperCampus')->textInput() ?>

    <?= $form->field($model, 'HasLaundry')->textInput() ?>

    <?= $form->field($model, 'HasCanteen')->textInput() ?>

    <?= $form->field($model, 'HasParking')->textInput() ?>

    <?= $form->field($model, 'IsFurnished')->textInput() ?>

    <?= $form->field($model, 'IsSemiFurnished')->textInput() ?>

    <?= $form->field($model, 'HasOwnCR')->textInput() ?>

    <?= $form->field($model, 'HasOwnBathroom')->textInput() ?>

    <?= $form->field($model, 'IsMaleOnly')->textInput() ?>

    <?= $form->field($model, 'IsFemaleOnly')->textInput() ?>

    <?= $form->field($model, 'IsCoEd')->textInput() ?>

    <?= $form->field($model, 'ManagerID')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
