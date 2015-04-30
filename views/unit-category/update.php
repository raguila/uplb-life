<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UnitCategory */

$this->title = 'Update Unit Category: ' . ' ' . $model->UnitCategoryID;
$this->params['breadcrumbs'][] = ['label' => 'Unit Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->UnitCategoryID, 'url' => ['view', 'id' => $model->UnitCategoryID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="unit-category-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
