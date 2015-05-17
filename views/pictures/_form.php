<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pictures */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pictures-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'PictureName')->textInput(['maxlength' => 30]) ?>

    <?= $form->field($model, 'PictureDescription')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'HouseID')->textInput() ?>

    <?= $form->field($model, 'PictureType')->textInput(['maxlength' => 100]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
