<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AdsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ads-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'AdsID') ?>

    <?= $form->field($model, 'UserID') ?>

    <?= $form->field($model, 'Image') ?>

    <?= $form->field($model, 'Description') ?>

    <?= $form->field($model, 'TimeStamp') ?>

    <?php // echo $form->field($model, 'Period') ?>

    <?php // echo $form->field($model, 'Priority') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
