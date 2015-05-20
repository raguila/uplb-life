<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\HousesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="houses-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'HouseID') ?>

    <?= $form->field($model, 'HouseName') ?>

    <?= $form->field($model, 'HouseDescription') ?>

    <?= $form->field($model, 'HouseType') ?>

    <?= $form->field($model, 'Address') ?>

    <?php // echo $form->field($model, 'Caretaker') ?>

    <?php // echo $form->field($model, 'ContactNo') ?>

    <?php // echo $form->field($model, 'Price') ?>

    <?php // echo $form->field($model, 'Size') ?>

    <?php // echo $form->field($model, 'Distance') ?>

    <?php // echo $form->field($model, 'Long') ?>

    <?php // echo $form->field($model, 'Lat') ?>

    <?php // echo $form->field($model, 'Featured') ?>

    <?php // echo $form->field($model, 'HasWifi') ?>

    <?php // echo $form->field($model, 'HasAirConditioningUnit') ?>

    <?php // echo $form->field($model, 'HasCurfew') ?>

    <?php // echo $form->field($model, 'PetsAllowed') ?>

    <?php // echo $form->field($model, 'VisitorsAllowed') ?>

    <?php // echo $form->field($model, 'SmokingAllowed') ?>

    <?php // echo $form->field($model, 'DrinkingAllowed') ?>

    <?php // echo $form->field($model, 'IsInsideUPLB') ?>

    <?php // echo $form->field($model, 'IsLowerCampus') ?>

    <?php // echo $form->field($model, 'IsUpperCampus') ?>

    <?php // echo $form->field($model, 'HasLaundry') ?>

    <?php // echo $form->field($model, 'HasCanteen') ?>

    <?php // echo $form->field($model, 'HasParking') ?>

    <?php // echo $form->field($model, 'IsFurnished') ?>

    <?php // echo $form->field($model, 'IsSemiFurnished') ?>

    <?php // echo $form->field($model, 'HasOwnCR') ?>

    <?php // echo $form->field($model, 'HasOwnBathroom') ?>

    <?php // echo $form->field($model, 'IsMaleOnly') ?>

    <?php // echo $form->field($model, 'IsFemaleOnly') ?>

    <?php // echo $form->field($model, 'IsCoEd') ?>

    <?php // echo $form->field($model, 'ManagerID') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
