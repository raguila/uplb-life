<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
$bundle = AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <link rel="shortcut icon" href="<?=$bundle->baseUrl.'/images/'?>favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?=$bundle->baseUrl.'/images/'?>favicon.ico" type="image/x-icon">

    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>
    <div class="wrap">
        <?php
            $isGuest = Yii::$app->user->isGuest;
            $isAdmin = ((!$isGuest)&&(Yii::$app->user->identity->UserTypeID ==1));
            $isManager = ((!$isGuest)&&(Yii::$app->user->identity->UserTypeID ==3));
            $isAdsManager = ((!$isGuest)&&(Yii::$app->user->identity->UserTypeID ==4));
            NavBar::begin([
                'brandLabel' => 'UPLB Life',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => [
                    ($isAdmin || $isManager)?
                    ['label' => 'View Houses', 'url' => ['/houses/index']]:
                    "",
                    ($isAdmin || $isManager)?
                    ['label' => 'Payments', 'url' => ['/payments/index']]:
                    "",
                    ($isAdmin || $isAdsManager)?
                    ['label' => 'Ads', 'url' => ['/ads/index']]:
                    "",
                    ['label' => 'Dorm Map', 'url' => ['/site/interactive']],
                    ['label' => 'About Us', 'url' => ['/site/about']],
					['label' => 'Contact Us', 'url' => ['/site/contact']],
                    Yii::$app->user->isGuest ?
                        ['label' => 'Login', 'url' => ['/site/login']] :
                        ['label' => 'Logout (' . Yii::$app->user->identity->UserName . ')',
                            'url' => ['/site/logout'],
                            'linkOptions' => ['data-method' => 'post']],
                    
                ],
            ]);
            NavBar::end();
        ?>

        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= $content ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <p class="pull-left">&copy; IT 227 2015 | Aguila, Aguila, Carandang, Encinas</p>
            
        </div>
    </footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
