<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ratings */

$this->title = 'Update Ratings: ' . ' ' . $model->RatingID;
$this->params['breadcrumbs'][] = ['label' => 'Ratings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->RatingID, 'url' => ['view', 'id' => $model->RatingID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ratings-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
