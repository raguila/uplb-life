<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RatingsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ratings-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'RatingID') ?>

    <?= $form->field($model, 'UserID') ?>

    <?= $form->field($model, 'Rating') ?>

    <?= $form->field($model, 'Timestamp') ?>

    <?= $form->field($model, 'UnitID') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
