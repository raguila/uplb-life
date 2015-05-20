<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\HousesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Houses';
$this->params['breadcrumbs'][] = $this->title;
$isGuest = Yii::$app->user->isGuest;
?>
<div class="houses-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php if(!$isGuest){ ?>
        <?= Html::a('Create Houses', ['create'], ['class' => 'btn btn-success']) ?>
        <?php } ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'HouseID',
            'HouseName',
            'HouseDescription',
            'HouseType',
            'Address',
            // 'Caretaker',
            // 'ContactNo',
            // 'Price',
            // 'Size',
            // 'Distance',
            // 'Long',
            // 'Lat',
            // 'Featured',
            // 'HasWifi',
            // 'HasAirConditioningUnit',
            // 'HasCurfew',
            // 'PetsAllowed',
            // 'VisitorsAllowed',
            // 'SmokingAllowed',
            // 'DrinkingAllowed',
            // 'IsInsideUPLB',
            // 'IsLowerCampus',
            // 'IsUpperCampus',
            // 'HasLaundry',
            // 'HasCanteen',
            // 'HasParking',
            // 'IsFurnished',
            // 'IsSemiFurnished',
            // 'HasOwnCR',
            // 'HasOwnBathroom',
            // 'IsMaleOnly',
            // 'IsFemaleOnly',
            // 'IsCoEd',
            // 'ManagerID',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
