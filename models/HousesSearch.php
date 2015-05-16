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
            [['HouseID', 'ContactNo', 'Featured', 'ManagerID'], 'integer'],
            [['HouseName', 'HouseDescription', 'Address', 'Caretaker'], 'safe'],
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
            'ContactNo' => $this->ContactNo,
            // 'Price' => $this->Price,
            // 'Size' => $this->Size,
            // 'Distance' => $this->Distance,
            'Long' => $this->Long,
            'Lat' => $this->Lat,
            'Featured' => $this->Featured,
            'ManagerID' => $this->ManagerID,
        ]);

        $query->andFilterWhere(['like', 'HouseName', $this->HouseName])
            ->andFilterWhere(['like', 'HouseDescription', $this->HouseDescription])
            ->andFilterWhere(['like', 'Address', $this->Address])
            ->andFilterWhere(['like', 'Caretaker', $this->Caretaker]);

        //Filter price range by 500 given the input price
        $query->andFilterWhere(['<=', 'Price', $this->Price + 500]);
        $query->andWhere(['>=', 'Price', $this->Price - 500]);

        $query->andFilterWhere(['<=', 'Size', $this->Size + 2]);
        $query->andWhere(['>=', 'Size', $this->Size - 2]);

        $query->andFilterWhere(['<=', 'Distance', $this->Distance + 1]);
        $query->andWhere(['>=', 'Distance', $this->Distance - 1]);

        return $dataProvider;
    }
}
