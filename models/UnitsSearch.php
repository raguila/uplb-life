<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Units;

/**
 * UnitsSearch represents the model behind the search form about `app\models\Units`.
 */
class UnitsSearch extends Units
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['UnitID', 'NumberOfTenants', 'HouseID'], 'integer'],
            [['UnitName', 'UnitDescription'], 'safe'],
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
        $query = Units::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'UnitID' => $this->UnitID,
            'NumberOfTenants' => $this->NumberOfTenants,
            'HouseID' => $this->HouseID,
        ]);

        $query->andFilterWhere(['like', 'UnitName', $this->UnitName])
            ->andFilterWhere(['like', 'UnitDescription', $this->UnitDescription]);

        return $dataProvider;
    }
}
