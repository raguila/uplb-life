<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "payments".
 *
 * @property integer $PaymentID
 * @property integer $TenantID
 * @property string $DateCreated
 * @property string $DateUpdated
 * @property integer $HouseID
 * @property integer $UnitID
 * @property integer $Amount
 * @property string $Description
 * @property string $ModeOfPayment
 * @property integer $Month
 * @property integer $Year
 * @property string $DatePaid
 * @property string $Remarks
 *
 * @property Houses $house
 * @property Units $unit
 */
class Payments extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'payments';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TenantID', /*'DateCreated', 'DateUpdated',*/ 'HouseID', 'UnitID', 'Amount', /*'Description', 'ModeOfPayment',*/ 'Month', 'Year', 'DatePaid'/*, 'Remarks'*/], 'required'],
            [['TenantID', 'HouseID', 'UnitID', 'Amount', 'Month', 'Year'], 'integer'],
            [['DateCreated', 'DateUpdated', 'DatePaid'], 'safe'],
            [['Description', 'ModeOfPayment'], 'string', 'max' => 50],
            [['Remarks'], 'string', 'max' => 160]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'PaymentID' => 'Payment ID',
            'TenantID' => 'Tenant ID',
            'DateCreated' => 'Date Created',
            'DateUpdated' => 'Date Updated',
            'HouseID' => 'House ID',
            'UnitID' => 'Unit ID',
            'Amount' => 'Amount',
            'Description' => 'Description',
            'ModeOfPayment' => 'Mode Of Payment',
            'Month' => 'Month',
            'Year' => 'Year',
            'DatePaid' => 'Date Paid',
            'Remarks' => 'Remarks',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTenant()
    {
        return $this->hasOne(Tenants::className(), ['TenantID' => 'TenantID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHouse()
    {
        return $this->hasOne(Houses::className(), ['HouseID' => 'HouseID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUnit()
    {
        return $this->hasOne(Units::className(), ['UnitID' => 'UnitID']);
    }
}
