<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\HouseCategory;

/**
 * HouseCategorySearch represents the model behind the search form about `app\models\HouseCategory`.
 */
class HouseCategorySearch extends HouseCategory
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['HouseCategoryID', 'HouseID', 'CategoryID'], 'integer'],
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
        $query = HouseCategory::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'HouseCategoryID' => $this->HouseCategoryID,
            'HouseID' => $this->HouseID,
            'CategoryID' => $this->CategoryID,
        ]);

        return $dataProvider;
    }
}
