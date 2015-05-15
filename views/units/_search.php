<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UnitsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="units-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'UnitID') ?>

    <?= $form->field($model, 'UnitName') ?>

    <?= $form->field($model, 'UnitDescription') ?>

    <?= $form->field($model, 'NumberOfTenants') ?>

    <?= $form->field($model, 'HouseID') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
