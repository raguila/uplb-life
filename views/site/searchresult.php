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
        'filterModel' => $model,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'HouseID',
            'HouseName',
            'ContactNo',
            'HouseDescription',
            //'Address',
            'Price',
            'Size',
            //'HouseType',
            // 'pictures' => [
            //     'header' => 'Picture',
            //     'value' => ''
            // ]
            // 'Caretaker',
            // 'ContactNo',
            // 'Long',
            // 'Lat',
            // 'ManagerID',
            ['class' => 'yii\grid\ActionColumn', 
                'template' => '{view}',
                'buttons'=>[
                      'view' => function ($url, $houses, $key) {
                        $url = "index.php?r=houses/view&id=".$houses->HouseID;     
                        return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', $url, [
                                'title' => Yii::t('yii', 'View'),
                        ]);                                
    
                      }
                  ]       
            ],
        ],
    ]); ?>

</div>
