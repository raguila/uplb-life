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
            [['HouseID', 'ContactNo', 'ManagerID'], 'integer'],
            [['HouseName', 'HouseDescription', 'Address', 'Caretaker'], 'safe'],
            [['Long', 'Lat'], 'number'],
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

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'HouseID' => $this->HouseID,
            'ContactNo' => $this->ContactNo,
            'Long' => $this->Long,
            'Lat' => $this->Lat,
            'ManagerID' => $this->ManagerID,
        ]);

        $query->andFilterWhere(['like', 'HouseName', $this->HouseName])
            ->andFilterWhere(['like', 'HouseDescription', $this->HouseDescription])
            ->andFilterWhere(['like', 'Address', $this->Address])
            ->andFilterWhere(['like', 'Caretaker', $this->Caretaker]);

        return $dataProvider;
    }
}
