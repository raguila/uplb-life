<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PaymentsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Payments';
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
            [ 'attribute' => 'Tenant Name', 'value' => 'tenant.TenantName' ],
            [ 'attribute' => 'Unit Name', 'value' => 'unit.UnitName' ],
            'Amount',
            'Month',
            'Year',
            'Description',
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
            //[ 'attribute' => 'TenantName', 'value' => 'Tenant.TenantName' ],
            

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>



</div>
