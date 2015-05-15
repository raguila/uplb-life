<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pictures */

$this->title = 'Update Pictures: ' . ' ' . $model->PictureID;
$this->params['breadcrumbs'][] = ['label' => 'Pictures', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->PictureID, 'url' => ['view', 'id' => $model->PictureID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pictures-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
