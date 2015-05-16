<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\assets\AppAsset;


use dosamigos\google\maps\LatLng;
use dosamigos\google\maps\overlays\InfoWindow;
use dosamigos\google\maps\overlays\Marker;
use dosamigos\google\maps\Map;


/* @var $this yii\web\View */
/* @var $model app\models\Houses */

$this->title = $model->HouseName;
$this->params['breadcrumbs'][] = ['label' => 'Houses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

$bundle = AppAsset::register($this);

$coord = new LatLng(['lat' => 14.165554, 'lng' => 121.244551]);
$map = new Map([
    'center' => $coord,
    'zoom' => 16,
]);

// Lets add a marker now
$marker = new Marker([
    'position' => $coord,
    'title' => 'My Home Town',
]);

// Provide a shared InfoWindow to the marker
$marker->attachInfoWindow(
    new InfoWindow([
        'content' => '<p>This is my super cool content</p>'
    ])
);

// Add marker to the map
$map->addOverlay($marker);

?>

<div class="row">
    <?php foreach ($model->pictures as $p): ?>
        <div class="container col-md-4">
        <?php $pid = $p->PictureID ?>
        
        <p><?= $p->PictureName ?></p>
        
        <a href="#<?= $pid ?>">
            <img src="<?=$bundle->baseUrl.'/images/'.$p->PictureName?>" height="200px" width="350px" id="<?= $p->PictureName ?>"/>
        </a>

        </div>
    <?php endforeach; ?>


    <?php foreach ($model->pictures as $p): ?>
        <?php $pid = $p->PictureID ?>
        <div class="overlay" id="<?= $pid ?>">
            <a href="#close" title="Close future box">
                <img src="<?=$bundle->baseUrl.'/images/'.$p->PictureName?>" height="400px" width="600px" />
            </a>
        </div>        
    <?php endforeach; ?>
</div>

<div class="houses-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->HouseID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->HouseID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <div class="row">
    <div class="container col-md-6">  
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'HouseID',
            'HouseName',
            'HouseDescription',
            'Address',
            'Caretaker',
            'ContactNo',
            'Long',
            'Lat',
            'ManagerID'
        ],
    ]) ?>
    </div>
    <div class="container col-md-6">   
        <?php echo $map->display(); ?>
    </div>
    </div>    
    
</div>
