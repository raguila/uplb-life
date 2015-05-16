<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "units".
 *
 * @property integer $UnitID
 * @property string $UnitName
 * @property string $UnitDescription
 * @property integer $MaxNumberOfTenants
 * @property integer $HouseID
 * @property integer $MonthlyRatePerPerson
 *
 * @property Payments[] $payments
 * @property Pictures[] $pictures
 * @property Ratings[] $ratings
 * @property Tenants[] $tenants
 * @property UnitCategory[] $unitCategories
 * @property Houses $house
 */
class Units extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'units';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['UnitName', 'UnitDescription', 'MaxNumberOfTenants', 'HouseID', 'MonthlyRatePerPerson'], 'required'],
            [['MaxNumberOfTenants', 'HouseID', 'MonthlyRatePerPerson'], 'integer'],
            [['UnitName'], 'string', 'max' => 30],
            [['UnitDescription'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'UnitID' => 'Unit ID',
            'UnitName' => 'Unit Name',
            'UnitDescription' => 'Unit Description',
            'MaxNumberOfTenants' => 'Max Number Of Tenants',
            'HouseID' => 'House ID',
            'MonthlyRatePerPerson' => 'Monthly Rate Per Person',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPayments()
    {
        return $this->hasMany(Payments::className(), ['UnitID' => 'UnitID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPictures()
    {
        return $this->hasMany(Pictures::className(), ['UnitID' => 'UnitID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRatings()
    {
        return $this->hasMany(Ratings::className(), ['UnitID' => 'UnitID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTenants()
    {
        return $this->hasMany(Tenants::className(), ['UnitID' => 'UnitID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUnitCategories()
    {
        return $this->hasMany(UnitCategory::className(), ['UnitID' => 'UnitID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHouse()
    {
        return $this->hasOne(Houses::className(), ['HouseID' => 'HouseID']);
    }
}
