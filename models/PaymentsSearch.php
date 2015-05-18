<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Payments;
use app\models\Tenants;
use app\models\Houses;


/**
 * PaymentsSearch represents the model behind the search form about `app\models\Payments`.
 */
class PaymentsSearch extends Payments
{

    public $Tenant;
    public $Unit;
    
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['PaymentID', 'TenantID', 'HouseID', 'UnitID', 'Amount', 'Month', 'Year'], 'integer'],
            [['DateCreated', 'DateUpdated', 'Description', 'ModeOfPayment', 'DatePaid', 'Remarks'], 'safe'],
            [['Tenant', 'Unit'], 'safe']
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
        $query->joinWith(['unit', 'tenant']);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $dataProvider->sort->attributes['Tenant Name'] = [
            // The tables are the ones our relation are configured to
            // in my case they are prefixed with "tbl_"
            'asc' => ['Tenants.TenantName' => SORT_ASC],
            'desc' => ['Tenants.TenantName' => SORT_DESC],
        ];

        $dataProvider->sort->attributes['Unit Name'] = [
            // The tables are the ones our relation are configured to
            // in my case they are prefixed with "tbl_"
            'asc' => ['Units.UnitName' => SORT_ASC],
            'desc' => ['Units.UnitName' => SORT_DESC],
        ];

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'PaymentID' => $this->PaymentID,
            self::tablename() . '.TenantID' => $this->TenantID,
            'DateCreated' => $this->DateCreated,
            'DateUpdated' => $this->DateUpdated,
            self::tablename() .'.HouseID' => $this->HouseID,
            self::tablename() .'.UnitID' => $this->UnitID,
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
