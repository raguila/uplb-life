<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tenants */

$this->title = 'Update Tenants: ' . ' ' . $model->TenantID;
$this->params['breadcrumbs'][] = ['label' => 'Tenants', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->TenantID, 'url' => ['view', 'id' => $model->TenantID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tenants-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
