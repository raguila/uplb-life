<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Ratings */

$this->title = 'Create Ratings';
$this->params['breadcrumbs'][] = ['label' => 'Ratings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ratings-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
