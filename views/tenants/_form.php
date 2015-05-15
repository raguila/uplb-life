<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Tenants */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tenants-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'TenantName')->textInput(['maxlength' => 50]) ?>

    <?php /*$form->field($model, 'Gender')->textInput(['maxlength' => 10]) */?>
    <?= $form->field($model, 'Gender')->radioList(['M' => 'Male', 'F' => 'Female']) ?>

    <?php /*$form->field($model, 'Birthdate')->textInput() */?>
    <?php
echo $form->labelEx($model,'Birthdate');
$this->widget('zii.widgets.jui.CJuiDatePicker', array(
'model'=>$model,
'attribute'=>'deadline',
                 'value'=>$model->deadline,
//additional javascript options for the date picker plugin
'options'=>array(
'dateFormat'=>'yy-mm-dd',
'showAnim'=>'fold',
                        'debug'=>true,
'datepickerOptions'=>array('changeMonth'=>true, 'changeYear'=>true),
),
'htmlOptions'=>array('style'=>'height:20px;'),
));
echo $form->error($model,'deadline');
?>

    <?= $form->field($model, 'Course')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'Job')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'Picture')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'UnitID')->textInput() ?>

    <?= $form->field($model, 'IDNumber')->textInput(['maxlength' => 15]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
