<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "payments".
 *
 * @property integer $PaymentID
 * @property string $DateCreated
 * @property string $DateUpdated
 * @property integer $UnitID
 * @property integer $Amount
 * @property string $Description
 * @property string $ModeOfPayment
 * @property integer $Month
 * @property integer $Year
 * @property string $DatePaid
 * @property string $Remarks
 *
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
            [['DateCreated', 'DateUpdated', 'UnitID', 'Amount', 'Description', 'ModeOfPayment', 'Month', 'Year', 'DatePaid', 'Remarks'], 'required'],
            [['DateCreated', 'DateUpdated', 'DatePaid'], 'safe'],
            [['UnitID', 'Amount', 'Month', 'Year'], 'integer'],
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
            'DateCreated' => 'Date Created',
            'DateUpdated' => 'Date Updated',
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
    public function getUnit()
    {
        return $this->hasOne(Units::className(), ['UnitID' => 'UnitID']);
    }
}
