<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RatingsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ratings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ratings-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Ratings', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'RatingID',
            'UserID',
            'Rating',
            'Timestamp',
            'UnitID',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
