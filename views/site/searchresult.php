<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\grid\GridView;

?>
<div class="site-search_result">
    <h1><?= Html::encode($this->title) ?></h1>

    <h3>Search Result:</h3>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'HouseID',
            'HouseName',
            'HouseDescription',
            'Address',
            'Price',
            'Size',
            // 'pictures' => [
            //     'header' => 'Picture',
            //     'value' => ''
            // ]
            // 'Caretaker',
            // 'ContactNo',
            // 'Long',
            // 'Lat',
            // 'ManagerID',
        ],
    ]); ?>

</div>
