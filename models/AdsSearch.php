<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Ads;

/**
 * AdsSearch represents the model behind the search form about `app\models\Ads`.
 */
class AdsSearch extends Ads
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['AdsID', 'UserID', 'Period', 'Priority'], 'integer'],
            [['Image', 'Description', 'TimeStamp'], 'safe'],
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
        $query = Ads::find();

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
            'AdsID' => $this->AdsID,
            'UserID' => $this->UserID,
            'TimeStamp' => $this->TimeStamp,
            'Period' => $this->Period,
            'Priority' => $this->Priority,
        ]);

        $query->andFilterWhere(['like', 'Image', $this->Image])
            ->andFilterWhere(['like', 'Description', $this->Description]);

        return $dataProvider;
    }
}
