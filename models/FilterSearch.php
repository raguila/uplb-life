<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Houses;

/**
 * HousesSearch represents the model behind the search form about `app\models\Houses`.
 */
class FilterSearch extends Houses
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['HouseID', 'Featured', 'HasWifi', 'HasAirConditioningUnit', 'HasCurfew', 'PetsAllowed', 'VisitorsAllowed', 'SmokingAllowed', 'DrinkingAllowed', 'IsInsideUPLB', 'IsLowerCampus', 'IsUpperCampus', 'HasLaundry', 'HasCanteen', 'HasParking', 'IsFurnished', 'IsSemiFurnished', 'HasOwnCR', 'HasOwnBathroom', 'IsMaleOnly', 'IsFemaleOnly', 'IsCoEd', 'ManagerID'], 'integer'],
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
        $query = Houses::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

         //Filter price range by 500 given the input price
        $query->andFilterWhere(['<=', 'Price', $this->Price + 200]);
        $query->andWhere(['>=', 'Price', $this->Price - 200]);

        $query->andFilterWhere(['<=', 'Size', $this->Size + 2]);
        $query->andWhere(['>=', 'Size', $this->Size - 2]);

        $query->andFilterWhere(['<=', 'Distance', $this->Distance + 1]);
        $query->andWhere(['>=', 'Distance', $this->Distance - 1]);

        return $dataProvider;
    }
}
