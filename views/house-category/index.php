<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\HouseCategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'House Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="house-category-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create House Category', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'HouseCategoryID',
            'HouseID',
            'CategoryID',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
