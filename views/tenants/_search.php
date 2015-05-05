<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TenantsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tenants-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'TenantID') ?>

    <?= $form->field($model, 'TenantName') ?>

    <?= $form->field($model, 'Gender') ?>

    <?= $form->field($model, 'Birthdate') ?>

    <?= $form->field($model, 'Course') ?>

    <?php // echo $form->field($model, 'Job') ?>

    <?php // echo $form->field($model, 'Picture') ?>

    <?php // echo $form->field($model, 'UnitID') ?>

    <?php // echo $form->field($model, 'IDNumber') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
