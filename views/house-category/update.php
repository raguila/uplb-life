<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\HouseCategory */

$this->title = 'Update House Category: ' . ' ' . $model->HouseCategoryID;
$this->params['breadcrumbs'][] = ['label' => 'House Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->HouseCategoryID, 'url' => ['view', 'id' => $model->HouseCategoryID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="house-category-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
