<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Houses;
/* @var $this yii\web\View */
/* @var $model app\models\Pictures */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pictures-form">

    <?php $form = ActiveForm::begin([
        'options' => ['class' => 'form-group', 'enctype' => 'multipart/form-data'],
    ]);  ?>

    <?= $form->field($model, 'PictureName')->fileInput(['id'=>'picture-name']) ?>

    <?= $form->field($model, 'PictureDescription')->textInput(['maxlength' => 50]) ?>

    
    <h5>House</h5>
    <?= Html::activeDropDownList($model, 'HouseID',
      ArrayHelper::map(Houses::find()->all(), 'HouseID', 'HouseName')) ?>
    
    <br>
    <br>
    
    <?= $form->field($model, 'PictureType')->textInput(['maxlength' => 100]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
