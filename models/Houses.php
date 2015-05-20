<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "houses".
 *
 * @property integer $HouseID
 * @property string $HouseName
 * @property string $HouseDescription
 * @property string $HouseType
 * @property string $Address
 * @property string $Caretaker
 * @property string $ContactNo
 * @property string $Price
 * @property string $Size
 * @property string $Distance
 * @property double $Long
 * @property double $Lat
 * @property integer $Featured
 * @property integer $HasWifi
 * @property integer $HasAirConditioningUnit
 * @property integer $HasCurfew
 * @property integer $PetsAllowed
 * @property integer $VisitorsAllowed
 * @property integer $SmokingAllowed
 * @property integer $DrinkingAllowed
 * @property integer $IsInsideUPLB
 * @property integer $IsLowerCampus
 * @property integer $IsUpperCampus
 * @property integer $HasLaundry
 * @property integer $HasCanteen
 * @property integer $HasParking
 * @property integer $IsFurnished
 * @property integer $IsSemiFurnished
 * @property integer $HasOwnCR
 * @property integer $HasOwnBathroom
 * @property integer $IsMaleOnly
 * @property integer $IsFemaleOnly
 * @property integer $IsCoEd
 * @property integer $ManagerID
 *
 * @property HouseCategory[] $houseCategories
 * @property Users $manager
 * @property Payments[] $payments
 * @property Pictures[] $pictures
 * @property Units[] $units
 */
class Houses extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'houses';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['HouseName', 'HouseDescription', 'HouseType', 'Address', 'Caretaker', 'Price', 'Size', 'Distance', 'Long', 'Lat', 'Featured', 'ManagerID'], 'required'],
            [['Price', 'Size', 'Distance', 'Long', 'Lat'], 'number'],
            [['Featured', 'HasWifi', 'HasAirConditioningUnit', 'HasCurfew', 'PetsAllowed', 'VisitorsAllowed', 'SmokingAllowed', 'DrinkingAllowed', 'IsInsideUPLB', 'IsLowerCampus', 'IsUpperCampus', 'HasLaundry', 'HasCanteen', 'HasParking', 'IsFurnished', 'IsSemiFurnished', 'HasOwnCR', 'HasOwnBathroom', 'IsMaleOnly', 'IsFemaleOnly', 'IsCoEd', 'ManagerID'], 'safe'],
            [['HouseName'], 'string', 'max' => 50],
            [['HouseDescription', 'Address'], 'string', 'max' => 200],
            [['HouseType', 'ContactNo'], 'string', 'max' => 15],
            [['Caretaker'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'HouseID' => 'House ID',
            'HouseName' => 'House Name',
            'HouseDescription' => 'House Description',
            'HouseType' => 'House Type',
            'Address' => 'Address',
            'Caretaker' => 'Caretaker',
            'ContactNo' => 'Contact No',
            'Price' => 'Price',
            'Size' => 'Size',
            'Distance' => 'Distance',
            'Long' => 'Long',
            'Lat' => 'Lat',
            'Featured' => 'Featured',
            'HasWifi' => 'Has Wifi',
            'HasAirConditioningUnit' => 'Has Air Conditioning Unit',
            'HasCurfew' => 'Has Curfew',
            'PetsAllowed' => 'Pets Allowed',
            'VisitorsAllowed' => 'Visitors Allowed',
            'SmokingAllowed' => 'Smoking Allowed',
            'DrinkingAllowed' => 'Drinking Allowed',
            'IsInsideUPLB' => 'Is Inside Uplb',
            'IsLowerCampus' => 'Is Lower Campus',
            'IsUpperCampus' => 'Is Upper Campus',
            'HasLaundry' => 'Has Laundry',
            'HasCanteen' => 'Has Canteen',
            'HasParking' => 'Has Parking',
            'IsFurnished' => 'Is Furnished',
            'IsSemiFurnished' => 'Is Semi Furnished',
            'HasOwnCR' => 'Has Own Cr',
            'HasOwnBathroom' => 'Has Own Bathroom',
            'IsMaleOnly' => 'Is Male Only',
            'IsFemaleOnly' => 'Is Female Only',
            'IsCoEd' => 'Is Co Ed',
            'ManagerID' => 'Manager ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHouseCategories()
    {
        return $this->hasMany(HouseCategory::className(), ['HouseID' => 'HouseID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getManager()
    {
        return $this->hasOne(Users::className(), ['UserID' => 'ManagerID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPayments()
    {
        return $this->hasMany(Payments::className(), ['HouseID' => 'HouseID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPictures()
    {
        return $this->hasMany(Pictures::className(), ['HouseID' => 'HouseID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUnits()
    {
        return $this->hasMany(Units::className(), ['HouseID' => 'HouseID']);
    }
}
