<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\assets\AppAsset;
 use yii\web\View;


use dosamigos\google\maps\LatLng;
use dosamigos\google\maps\overlays\InfoWindow;
use dosamigos\google\maps\overlays\Marker;
use dosamigos\google\maps\Map;


/* @var $this yii\web\View */
/* @var $model app\models\Houses */

$this->title = $model->HouseName;
$this->params['breadcrumbs'][] = ['label' => 'Houses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$isGuest = Yii::$app->user->isGuest;
$bundle = AppAsset::register($this);

$coord = new LatLng(['lat' => $model->Lat, 'lng' => $model->Long]);
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
        <div class="container col-md-4" style="text-align: center;">
        <?php $pid = $p->PictureID ?>
        
        
        
        <a href="#<?= $pid ?>">
            <img src="<?=$bundle->baseUrl.'/images/'.$p->PictureName?>" height="200px" width="350px" id="<?= $p->PictureName ?>"/>
        </a>
        <p><?= $p->PictureDescription ?></p>
        </div>
    <?php endforeach; ?>


    <?php foreach ($model->pictures as $p): ?>
        <?php $pid = $p->PictureID ?>
        <div class="overlay" id="<?= $pid ?>">
            <a href="#close" title="Close">
                <img src="<?=$bundle->baseUrl.'/images/'.$p->PictureName?>" height="450px" width="650px" />
            </a>
        </div>        
    <?php endforeach; ?>
</div>

<div class="houses-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php if(!$isGuest){ ?>
        <?= Html::a('Update', ['update', 'id' => $model->HouseID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->HouseID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?php }?>

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
            'Price',
            'Size',
            'Distance',
            'HouseType',
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
<br>
<div class="houses-units" style="text-align: center;">
    <h3>List of Units in this House</h3>
    
    <?php foreach ($model->units as $u): ?>
    <div style="background-color:#FFFFF;">
        <?php $uid = $u->UnitID ?>
        <div class="container col-md-12" style="text-align: center;">
        <a href="index.php?r=units/view&id=<?= $uid ?> ">
            <h5><?= $uName = $u->UnitName ?></h5>
        </a>
        <h5> Max Number of Tenants: <?= $u->MaxNumberOfTenants ?></h5>
        

        </div>
    </div>
    <?php endforeach; ?>

</div>



</div>
