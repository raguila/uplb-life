<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Units */

$this->title = 'Add new unit' . $titleSuffix;
$this->params['breadcrumbs'][] = ['label' => 'Units', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="units-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php if($isAdmin) {
    	echo $this->render('_form', [
        'model' => $model,
        'isAdmin' => $isAdmin,
        'houses' => $houses
    ]);} else {
    	echo $this->render('_form', [ 
    	'model'=> $model,
    	'isAdmin' => $isAdmin
    	]);
    }?>
</div>
