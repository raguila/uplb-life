<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tenants;

/**
 * TenantsSearch represents the model behind the search form about `app\models\Tenants`.
 */
class TenantsSearch extends Tenants
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TenantID', 'Age', 'UnitID'], 'integer'],
            [['TenantName', 'Gender', 'Birthdate', 'Course', 'Job', 'Picture', 'IDNumber'], 'safe'],
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
        $query = Tenants::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'TenantID' => $this->TenantID,
            'Birthdate' => $this->Birthdate,
            'Age' => $this->Age,
            'UnitID' => $this->UnitID,
        ]);

        $query->andFilterWhere(['like', 'TenantName', $this->TenantName])
            ->andFilterWhere(['like', 'Gender', $this->Gender])
            ->andFilterWhere(['like', 'Course', $this->Course])
            ->andFilterWhere(['like', 'Job', $this->Job])
            ->andFilterWhere(['like', 'Picture', $this->Picture])
            ->andFilterWhere(['like', 'IDNumber', $this->IDNumber]);

        return $dataProvider;
    }
}
