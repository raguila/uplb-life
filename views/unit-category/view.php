<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\UnitCategory */

$this->title = $model->UnitCategoryID;
$this->params['breadcrumbs'][] = ['label' => 'Unit Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="unit-category-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->UnitCategoryID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->UnitCategoryID], [
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
            'UnitCategoryID',
            'UnitID',
            'CategoryID',
        ],
    ]) ?>

</div>
