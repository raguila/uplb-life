<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Payments;

/**
 * PaymentsSearch represents the model behind the search form about `app\models\Payments`.
 */
class PaymentsSearch extends Payments
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['PaymentID', 'UnitID', 'HouseID', 'Amount', 'Month', 'Year'], 'integer'],
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

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'PaymentID' => $this->PaymentID,
            'DateCreated' => $this->DateCreated,
            'DateUpdated' => $this->DateUpdated,
            'UnitID' => $this->UnitID,
            'HouseID' => $this->HouseID,
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
