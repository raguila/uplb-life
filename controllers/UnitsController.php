<?php

namespace app\controllers;

use Yii;
use app\models\Units;
use app\models\UnitsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\Houses;
use app\models\Tenants;
use \yii\db\Query;

/**
 * UnitsController implements the CRUD actions for Units model.
 */
class UnitsController extends Controller
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
     * Lists all Units models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UnitsSearch();
        $houseName = '';

        $isGuest = Yii::$app->user->isGuest;

        if (!$isGuest) {
            $userTypeID = Yii::$app->user->identity->UserTypeID;

            if ($userTypeID == 1) {
                $houseName = '';

            } else if ($userTypeID == 3) {
                $houseID = $this->getHouseID(Yii::$app->user->identity->UserID);
                $houseName = $this->getHouseName(Yii::$app->user->identity->UserID);

                $searchModel->HouseID = $houseID;

                $units = Units::findAll(['HouseID' => $houseID]);
            }
        }

        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'houseName' => $houseName
        ]);
    }

    /**
     * Displays a single Units model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $isGuest = Yii::$app->user->isGuest;
        $model = $this->findModel($id);

        if (!$isGuest) {
            $userTypeID = Yii::$app->user->identity->UserTypeID;
            $userID = Yii::$app->user->identity->UserID;
            $houseManagerID = Houses::findOne($model->HouseID)->ManagerID;

            if ($userTypeID == 1 || ($userTypeID == 3 && $userID == $houseManagerID)) {
                //Only admins and housemanagers can see the tenants of a unit in the view page

                $tenants = $this->getUnitTenants($model->UnitID);    
                return $this->render('view', [
                    'model' => $model,
                    'tenants' => $tenants
                ]);
            }
        }


        return $this->render('view', [
            'model' => $model
        ]);
    }

    /**
     * Creates a new Units model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Units();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->UnitID]);
        } else {

            $isGuest = Yii::$app->user->isGuest;

            if (!$isGuest) {
                $userTypeID = Yii::$app->user->identity->UserTypeID;

                if ($userTypeID == 1) {
                    $isAdmin = true;
                    $titleSuffix = '';

                    $houses = Houses::find()->all();

                    return $this->render('create', [
                        'model' => $model,
                        'titleSuffix' => $titleSuffix,
                        'isAdmin' => $isAdmin,
                        'houses' => $houses
                    ]);
                } else if ($userTypeID == 3) {
                    $isAdmin = false;
                    $houseID = $this->getHouseID(Yii::$app->user->identity->UserID);
                    $model->HouseID = $houseID;
                    $houseName = $this->getHouseName(Yii::$app->user->identity->UserID);
                    $titleSuffix = ' for ' . $houseName;

                    $model->HouseID = $houseID;

                    $units = Units::findAll(['HouseID' => $houseID]);

                    return $this->render('create', [
                        'model' => $model,
                        'titleSuffix' => $titleSuffix,
                        'isAdmin' => $isAdmin
                    ]);
                }
            } else {
                //Guest. Redirect to home page
            }
        }
    }

    /**
     * Updates an existing Units model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        /*$model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->UnitID]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }*/

        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->UnitID]);
        } else {

            $isGuest = Yii::$app->user->isGuest;

            if (!$isGuest) {
                $userTypeID = Yii::$app->user->identity->UserTypeID;

                if ($userTypeID == 1) {
                    $isAdmin = true;
                    $titleSuffix = '';

                    $houses = Houses::find()->all();

                    return $this->render('create', [
                        'model' => $model,
                        'titleSuffix' => $titleSuffix,
                        'isAdmin' => $isAdmin,
                        'houses' => $houses
                    ]);
                } else if ($userTypeID == 3) {
                    $isAdmin = false;
                    $houseID = $this->getHouseID(Yii::$app->user->identity->UserID);
                    $model->HouseID = $houseID;
                    $houseName = $this->getHouseName(Yii::$app->user->identity->UserID);
                    $titleSuffix = ' for ' . $houseName;

                    $model->HouseID = $houseID;

                    $units = Units::findAll(['HouseID' => $houseID]);

                    return $this->render('update', [
                        'model' => $model,
                        'titleSuffix' => $titleSuffix,
                        'isAdmin' => $isAdmin
                    ]);
                }
            } else {
                //Guest. Redirect to home page
            }
        }


    }

    /**
     * Deletes an existing Units model.
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
     * Finds the Units model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Units the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Units::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    protected function getHouseID($managerUserID) {
        $houseID = Houses::find()
            ->where(['ManagerID' => $managerUserID])
            ->one()->HouseID;

        return $houseID;
    }

    protected function getHouseName($managerUserID) {
        $houseName = Houses::find()
            ->where(['ManagerID' => $managerUserID])
            ->one()->HouseName;

        return $houseName;
    }

    protected function getUnitTenants($unitID) {
        $tenants = Tenants::findAll(['UnitID' => $unitID]);

        return $tenants;
    }
}
