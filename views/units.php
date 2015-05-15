<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Units */
/* @var $form ActiveForm */
?>
<div class="units">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'UnitName') ?>
        <?= $form->field($model, 'UnitDescription') ?>
        <?= $form->field($model, 'NumberOfTenants') ?>
        <?= $form->field($model, 'HouseID') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- units -->
