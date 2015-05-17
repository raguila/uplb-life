<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pictures;

/**
 * PicturesSearch represents the model behind the search form about `app\models\Pictures`.
 */
class PicturesSearch extends Pictures
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['PictureID', 'HouseID'], 'integer'],
            [['PictureName', 'PictureDescription', 'PictureType'], 'safe'],
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
        $query = Pictures::find();

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
            'PictureID' => $this->PictureID,
            'HouseID' => $this->HouseID,
        ]);

        $query->andFilterWhere(['like', 'PictureName', $this->PictureName])
            ->andFilterWhere(['like', 'PictureDescription', $this->PictureDescription])
            ->andFilterWhere(['like', 'PictureType', $this->PictureType]);

        return $dataProvider;
    }
}
