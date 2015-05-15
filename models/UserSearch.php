<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Users;

/**
 * UserSearch represents the model behind the search form about `app\models\Users`.
 */
class UserSearch extends Users
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['UserID', 'UserTypeID'], 'integer'],
            [['UserName', 'Password', 'FirstName', 'MiddleName', 'LastName', 'Picture'], 'safe'],
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
        $query = Users::find();

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
            'UserID' => $this->UserID,
            'UserTypeID' => $this->UserTypeID,
        ]);

        $query->andFilterWhere(['like', 'UserName', $this->UserName])
            ->andFilterWhere(['like', 'Password', $this->Password])
            ->andFilterWhere(['like', 'FirstName', $this->FirstName])
            ->andFilterWhere(['like', 'MiddleName', $this->MiddleName])
            ->andFilterWhere(['like', 'LastName', $this->LastName])
            ->andFilterWhere(['like', 'Picture', $this->Picture]);

        return $dataProvider;
    }
}
