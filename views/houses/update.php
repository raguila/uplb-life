<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Houses */

$this->title = 'Update Houses: ' . ' ' . $model->HouseID;
$this->params['breadcrumbs'][] = ['label' => 'Houses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->HouseID, 'url' => ['view', 'id' => $model->HouseID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="houses-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
