<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Payments */

$this->title = 'Create Payment Record';
$this->params['breadcrumbs'][] = ['label' => 'Payments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="payments-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'units' => $units,
        'months' => $months,
        'tenants' => $tenants
    ]) ?>

</div>
