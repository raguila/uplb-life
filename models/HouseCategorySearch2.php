<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Houses;

/**
 * HousesSearch represents the model behind the search form about `app\models\Houses`.
 */
class HouseCategorySearch2 extends Houses
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['HouseID', 'ContactNo', 'Featured', 'ManagerID'], 'integer'],
            [['HouseName', 'HouseDescription', 'HouseType', 'Address', 'Caretaker', 'ContactNo'], 'safe'],
            [['Price', 'Size', 'Distance', 'Long', 'Lat'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        
        Yii::info("SOOOOOMETHING HERE!", __METHOD__);
        $sql = "SELECT * FROM `houses` INNER JOIN `house_category` ON `houses`.`HouseID` = `house_category`.`HouseID` WHERE `house_category`.`CategoryID` = 8";
        Yii::info($sql, __METHOD__);
        $query = Houses::findBySql($sql)->all();

        $dataProvider = new ArrayDataProvider([
            'allModels' => $query,
        ]);

        if (!($this->load($params))) {
            //$query->joinWith(['users']);
            return $dataProvider;
        }

        return $dataProvider;
    }
}
