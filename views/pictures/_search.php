<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PicturesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pictures-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'PictureID') ?>

    <?= $form->field($model, 'PictureName') ?>

    <?= $form->field($model, 'HouseID') ?>

    <?= $form->field($model, 'UnitID') ?>

    <?= $form->field($model, 'PictureType') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
