<?php

namespace app\controllers;

use Yii;
use app\models\Payments;
use app\models\PaymentsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\Houses;
use app\models\Units;
use app\models\Tenants;
use \yii\db\Query;


/**
 * PaymentsController implements the CRUD actions for Payments model.
 */
class PaymentsController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Payments models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PaymentsSearch();

        $isGuest = Yii::$app->user->isGuest;

        if ($isGuest) {
            return $this->goHome();
        }

        $userTypeID = Yii::$app->user->identity->UserTypeID;


        if ($userTypeID == 1) {
            //Admin. Can see everything
            $units = Units::find()->all();
            $tenants = Tenants::find()->all();
            $titleSuffix = ' for all Houses';
        } else if ($userTypeID == 3) {
            //House Manager. Can see only own stuff
            $houseID = $this->getHouseID(Yii::$app->user->identity->UserID);

            $houseName = $this->getHouseName($houseID);
            $titleSuffix = ' for ' . $houseName;

            $units = Units::findAll(['HouseID' => $houseID]);

            $tenants = $this->getHouseTenants($houseID);

            $searchModel->HouseID = $houseID;  
        } else {
            return $this->goHome();
        }

        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'units' => $units,
            'tenants' => $tenants,
            'months' => $this->getMonthsList(),
            'titleSuffix' => $titleSuffix
        ]);
    }

    /**
     * Displays a single Payments model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);
        $unitName = Units::findOne($model->UnitID)->UnitName;
        $tenantName = Tenants::findOne($model->TenantID)->TenantName;

        return $this->render('view', [
            'model' => $model,
            'unitName' => $unitName,
            'tenantName' => $tenantName
        ]);
    }

    /**
     * Creates a new Payments model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Payments();

        if ($model->load(Yii::$app->request->post())) {
            $model->DateCreated = date("Y-m-d");
            $model->DateUpdated = date("Y-m-d");

            if ($model->save()) {
                return $this->redirect(['view', 'id' => $model->PaymentID]);
            }
        } else {
            //Create new Payment Record
            $userTypeID = Yii::$app->user->identity->UserTypeID;

            if ($userTypeID == 1) {
                //Admin
                $units = Units::find()->all();
                $tenants = Tenants::find()->all();
            } else if ($userTypeID == 3) {

                //House Manager
                $houseID = $this->getHouseID(Yii::$app->user->identity->UserID);

                $units = Units::findAll(['HouseID' => $houseID]);

                $tenants = $this->getHouseTenants($houseID);

                $model->HouseID = $houseID;
            } else {
                return $this->goHome();
            }

            return $this->render('create', [
                'model' => $model,
                'units' => $units,
                'months' => $this->getMonthsList(),
                'tenants' => $tenants
            ]);  

            
        }
    }

    /**
     * Updates an existing Payments model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            $model->DateUpdated = date("Y-m-d");

            if ($model->save()) {
                return $this->redirect(['view', 'id' => $model->PaymentID]);    
            }
        } else {
            $userTypeID = Yii::$app->user->identity->UserTypeID;

            if ($userTypeID == 1) {
                //Admin
                // return $this->redirect(['']);
            } else if ($userTypeID == 3) {

                //House Manager
                $houseID = $this->getHouseID(Yii::$app->user->identity->UserID);

                $units = Units::findAll(['HouseID' => $houseID]);

                $tenants = $this->getHouseTenants($houseID);

                $model->HouseID = $houseID;

                return $this->render('update', [
                    'model' => $model,
                    'units' => $units,
                    'months' => $this->getMonthsList(),
                    'tenants' => $tenants
                ]);
            }
        }
    }

    /**
     * Deletes an existing Payments model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Payments model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Payments the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Payments::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }








    /*HELPER FUNCTIONS*/

    protected function getHouseID($managerUserID) {
        $houseID = Houses::find()
            ->where(['ManagerID' => $managerUserID])
            ->one()->HouseID;

        return $houseID;
    }

    protected function getHouseName($houseID) {
        $houseName = Houses::find()
            ->where(['HouseID' => $houseID])
            ->one()->HouseName;

        return $houseName;
    }

    protected function getMonthsList() {
        $months = ['1' => 'January', '2' => 'February', '3' => 'March', '4' => 'April',
            '5' => 'May', '6' => 'June', '7' => 'July', '8' => 'August',
            '9' => 'September', '10' => 'October', '11' => 'November', '12' => 'December'];

        return $months;
    }

    protected function getHouseTenants($houseID) {
         $tenants = (new Query())
            ->select(['t.TenantName', 't.TenantID'])
            ->from('Tenants t')
            ->leftJoin('Units u', 't.UnitID=u.UnitID')
            ->leftJoin('Houses h', 'h.HouseID=u.HouseID')
            ->where('h.HouseID=:houseID', [':houseID' => $houseID])
            ->all();

        return $tenants;
    }
}
