<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Payments */

$this->title = $unitName . ', ' . $model->Month . ' - ' . $model->Year;
$this->params['breadcrumbs'][] = ['label' => 'Payments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="payments-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->PaymentID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->PaymentID], [
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
            // 'PaymentID',
            // 'TenantID',
            [ 'attribute' => 'Unit', 'value' => $unitName ],
            [ 'attribute' => 'Tenant', 'value' => $tenantName ],
            'Amount',
            'Month',
            'Year',
            'DatePaid',
            'Description',
            'ModeOfPayment',
            'Remarks',
            'DateCreated',
            'DateUpdated',
        ],
    ]) ?>

</div>
