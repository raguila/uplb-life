<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Houses;

/**
 * HousesSearch represents the model behind the search form about `app\models\Houses`.
 */
class HousesSearch extends Houses
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

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'HouseID' => $this->HouseID,
            'Price' => $this->Price,
            'Size' => $this->Size,
            'Distance' => $this->Distance,
            'Long' => $this->Long,
            'Lat' => $this->Lat,
            'Featured' => $this->Featured,
            'HasWifi' => $this->HasWifi,
            'HasAirConditioningUnit' => $this->HasAirConditioningUnit,
            'HasCurfew' => $this->HasCurfew,
            'PetsAllowed' => $this->PetsAllowed,
            'VisitorsAllowed' => $this->VisitorsAllowed,
            'SmokingAllowed' => $this->SmokingAllowed,
            'DrinkingAllowed' => $this->DrinkingAllowed,
            'IsInsideUPLB' => $this->IsInsideUPLB,
            'IsLowerCampus' => $this->IsLowerCampus,
            'IsUpperCampus' => $this->IsUpperCampus,
            'HasLaundry' => $this->HasLaundry,
            'HasCanteen' => $this->HasCanteen,
            'HasParking' => $this->HasParking,
            'IsFurnished' => $this->IsFurnished,
            'IsSemiFurnished' => $this->IsSemiFurnished,
            'HasOwnCR' => $this->HasOwnCR,
            'HasOwnBathroom' => $this->HasOwnBathroom,
            'IsMaleOnly' => $this->IsMaleOnly,
            'IsFemaleOnly' => $this->IsFemaleOnly,
            'IsCoEd' => $this->IsCoEd,
            'ManagerID' => $this->ManagerID,
        ]);

        $query->andFilterWhere(['like', 'HouseName', $this->HouseName])
            ->andFilterWhere(['like', 'HouseDescription', $this->HouseDescription])
            ->andFilterWhere(['like', 'HouseType', $this->HouseType])
            ->andFilterWhere(['like', 'Address', $this->Address])
            ->andFilterWhere(['like', 'Caretaker', $this->Caretaker])
            ->andFilterWhere(['like', 'ContactNo', $this->ContactNo]);

        return $dataProvider;
    }
}
