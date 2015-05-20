<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Houses;

/**
 * HousesSearch represents the model behind the search form about `app\models\Houses`.
 */
class MainSearch extends Houses
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
        Yii::info("Dito pumasok e. :))", __METHOD__);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere(['like', 'HouseName', $this->HouseName])
            //->andFilterWhere(['like', 'HouseDescription', $this->HouseDescription])
            ->orWhere(['like', 'HouseType', $this->HouseName])
            ->orWhere(['like', 'HouseDescription', $this->HouseName]);
            //->andFilterWhere(['like', 'Address', $this->Address])
            //->andFilterWhere(['like', 'Caretaker', $this->Caretaker]);

        return $dataProvider;
    }
}
