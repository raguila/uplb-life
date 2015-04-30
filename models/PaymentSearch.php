<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Payments;

/**
 * PaymentSearch represents the model behind the search form about `app\models\Payments`.
 */
class PaymentSearch extends Payments
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['PaymentID', 'UnitID', 'Amount', 'Month', 'Year'], 'integer'],
            [['DateCreated', 'DateUpdated', 'Description', 'ModeOfPayment', 'DatePaid', 'Remarks'], 'safe'],
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
        $query = Payments::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'PaymentID' => $this->PaymentID,
            'DateCreated' => $this->DateCreated,
            'DateUpdated' => $this->DateUpdated,
            'UnitID' => $this->UnitID,
            'Amount' => $this->Amount,
            'Month' => $this->Month,
            'Year' => $this->Year,
            'DatePaid' => $this->DatePaid,
        ]);

        $query->andFilterWhere(['like', 'Description', $this->Description])
            ->andFilterWhere(['like', 'ModeOfPayment', $this->ModeOfPayment])
            ->andFilterWhere(['like', 'Remarks', $this->Remarks]);

        return $dataProvider;
    }
}
