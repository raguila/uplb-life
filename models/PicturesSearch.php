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
            [['PictureID', 'HouseID', 'UnitID'], 'integer'],
            [['PictureName', 'PictureType'], 'safe'],
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

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'PictureID' => $this->PictureID,
            'HouseID' => $this->HouseID,
            'UnitID' => $this->UnitID,
        ]);

        $query->andFilterWhere(['like', 'PictureName', $this->PictureName])
            ->andFilterWhere(['like', 'PictureType', $this->PictureType]);

        return $dataProvider;
    }
}
