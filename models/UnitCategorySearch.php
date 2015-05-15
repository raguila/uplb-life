<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\UnitCategory;

/**
 * UnitCategorySearch represents the model behind the search form about `app\models\UnitCategory`.
 */
class UnitCategorySearch extends UnitCategory
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['UnitCategoryID', 'UnitID', 'CategoryID'], 'integer'],
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
        $query = UnitCategory::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'UnitCategoryID' => $this->UnitCategoryID,
            'UnitID' => $this->UnitID,
            'CategoryID' => $this->CategoryID,
        ]);

        return $dataProvider;
    }
}
