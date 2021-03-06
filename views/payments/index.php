<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PaymentsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Payment records' . $titleSuffix;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="payments-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php echo $this->render('_search',
        ['model' => $searchModel,
         'units' => $units,
         'tenants' => $tenants,
         'months' => $months]); ?>

    <p>
        <?= Html::a('Create Payments', ['create'], ['class' => 'payments-create btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [ 'attribute' => 'Unit', 'value' => 'unit.UnitName' ],
            [ 'attribute' => 'Tenant', 'value' => 'tenant.TenantName' ],            
            'Amount',
            'Month',
            'Year',
            'DatePaid',
            'Description',
            //'ModeOfPayment',
            'Remarks',
            //'DateCreated',
            //'DateUpdated',
            // 'UnitID',
            // 'Amount',
            // 'Description',
            // 'ModeOfPayment',
            // 'Month',
            // 'Year',
            // 'DatePaid',
            // 'Remarks',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>



</div>
