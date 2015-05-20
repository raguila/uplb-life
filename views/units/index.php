<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UnitsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = $houseName . ' Units';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="units-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php if ($authorizedToCRUD) { ?>
        <p>
            <?= Html::a('Create Units', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
        <?php } ?>

    <?php if ($authorizedToCRUD) { 
        echo GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                'UnitName',
                'UnitDescription',
                'MaxNumberOfTenants',
                'MonthlyRatePerPerson',
                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); 
    } else { //Guests can't edit/
        echo GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                'UnitName',
                'UnitDescription',
                'MaxNumberOfTenants',
                'MonthlyRatePerPerson',
                ['class' => 'yii\grid\ActionColumn', 'template' => '{view}'],
            ],
        ]); 

    }?>
</div>
