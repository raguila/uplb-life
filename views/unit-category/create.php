<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\UnitCategory */

$this->title = 'Create Unit Category';
$this->params['breadcrumbs'][] = ['label' => 'Unit Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="unit-category-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
