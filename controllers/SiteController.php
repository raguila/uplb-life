<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Houses;
use app\models\HousesSearch;
use app\models\FilterSearch;
use app\models\MainSearch;

class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {

        // $sql = "SELECT * FROM houses WHERE Featured = 1 AND HouseType= 'Dorm'";
        // $featured_dorm = Houses::findBySql($sql)->all();

        $model = new HousesSearch();
        $filter = new FilterSearch();
        $main = new MainSearch();

        return $this->render('index', [
            'model' => $model,
            'filter' => $filter,
            'main' => $main
        ]);
    }

    public function actionInteractive()
    {
        
        return $this->render('interactive');
    }

    public function actionMainsearch()
    {
        
        $main = new MainSearch();

        $dataProvider = $main->search(Yii::$app->request->queryParams);

        return $this->render('searchresult', [
            'model' => $main,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionCategorysearch()
    {
        
        $category = new HousesSearch();

        $dataProvider = $category->search(Yii::$app->request->queryParams);

        return $this->render('searchresult', [
            'model' => $category,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionFiltersearch()
    {
        
        $filter = new FilterSearch();

        $dataProvider = $filter->search(Yii::$app->request->queryParams);

        return $this->render('searchresult', [
            'model' => $filter,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goHome();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');
            
            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    public function actionAbout()
    {
        return $this->render('about');
    }
}
