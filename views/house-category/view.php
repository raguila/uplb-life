<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\HouseCategory */

$this->title = $model->HouseCategoryID;
$this->params['breadcrumbs'][] = ['label' => 'House Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="house-category-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->HouseCategoryID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->HouseCategoryID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'HouseCategoryID',
            'HouseID',
            'CategoryID',
        ],
    ]) ?>

</div>
