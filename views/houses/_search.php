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

    <?= $form->field($model, 'Address') ?>

    <?= $form->field($model, 'Caretaker') ?>

    <?php // echo $form->field($model, 'ContactNo') ?>

    <?php // echo $form->field($model, 'Price') ?>

    <?php // echo $form->field($model, 'Size') ?>

    <?php // echo $form->field($model, 'Distance') ?>

    <?php // echo $form->field($model, 'Long') ?>

    <?php // echo $form->field($model, 'Lat') ?>

    <?php // echo $form->field($model, 'Featured') ?>

    <?php // echo $form->field($model, 'ManagerID') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
