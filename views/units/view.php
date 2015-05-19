<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Units */

$this->title = $model->UnitName;
$this->params['breadcrumbs'][] = ['label' => 'Units', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

$isGuest = Yii::$app->user->isGuest;
?>
<div class="units-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php if($authorizedToCRUD) { ?>
        <p>
            <?= Html::a('Update', ['update', 'id' => $model->UnitID], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->UnitID], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                ],
            ]) ?>
        </p>
    <?php } ?>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [ 'attribute' => 'House', 'value' => $houseName ],
            'UnitName',            
            'MaxNumberOfTenants',
            'MonthlyRatePerPerson',
            'UnitDescription',
        ],
    ]) ?>


    <?php
        //Display PayPal reservation button if the unit has no tenants. Guests must log in as usertype 2  
        if (!$isGuest) {
            $userTypeID = Yii::$app->user->identity->UserTypeID;

            if ($userTypeID == 2 && $unitIsAvailable) { ?>
            <br/><br/>
            <div class="reservation-group">
                <h4> Want to reserve this Unit?</h4>
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
                    ">
                    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                </form>
            </div>
            <?php }
        } else if ($isGuest && $unitIsAvailable) { //Guests have to log in to reserve a unit ?>
            <br/><br/>
            <div class="reservation-group">
                <h4> Want to reserve this Unit?</h4>
                <?= Html::a('Log In', ['/site/login'], ['class' => 'btn btn-primary']); ?>
            </div>
    <?php } ?>

    <br/><br/>

    <?php
        //Display tenants if admin or housemanager is logged in.
        if (isset($tenants)) {
        echo "<h3>Tenants</h3>";
        echo GridView::widget([
            'dataProvider' => $tenants,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                'TenantName',
                'Gender',
                'Birthdate',
                'Course',
                 'Job',
                // 'Picture',
                'IDNumber',
            ],
        ]);
    } ?>

    <?php
        //Display last 10 payments if admin or housemanager is logged in.
        if (isset($recentPayments)) { 
            echo "<h3>Recent Payments</h3>";
            echo GridView::widget([
                'dataProvider' => $recentPayments,
                'columns' => [
                ['class' => 'yii\grid\SerialColumn'],         
                'Amount',
                'Month',
                'Year',
                'DatePaid',
                'Description',
                //'ModeOfPayment',
                'Remarks',
            ], ]);
        } ?>



</div>
