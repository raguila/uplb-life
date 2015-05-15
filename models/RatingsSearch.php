<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Ratings;

/**
 * RatingsSearch represents the model behind the search form about `app\models\Ratings`.
 */
class RatingsSearch extends Ratings
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['RatingID', 'UserID', 'Rating', 'UnitID'], 'integer'],
            [['Timestamp'], 'safe'],
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
        $query = Ratings::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'RatingID' => $this->RatingID,
            'UserID' => $this->UserID,
            'Rating' => $this->Rating,
            'Timestamp' => $this->Timestamp,
            'UnitID' => $this->UnitID,
        ]);

        return $dataProvider;
    }
}
