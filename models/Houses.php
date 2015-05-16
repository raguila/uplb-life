<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "houses".
 *
 * @property integer $HouseID
 * @property string $HouseName
 * @property string $HouseDescription
 * @property string $Address
 * @property string $Caretaker
 * @property integer $ContactNo
 * @property string $Price
 * @property string $Size
 * @property string $Distance
 * @property string $Long
 * @property string $Lat
 * @property integer $Featured
 * @property integer $ManagerID
 *
 * @property HouseCategory[] $houseCategories
 * @property Users $manager
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
            [['HouseName', 'HouseDescription', 'Address', 'Caretaker', 'Price', 'Size', 'Distance', 'Long', 'Lat', 'Featured', 'ManagerID'], 'required'],
            [['ContactNo', 'Featured', 'ManagerID'], 'integer'],
            [['Price', 'Size', 'Distance', 'Long', 'Lat'], 'number'],
            [['HouseName', 'Caretaker'], 'string', 'max' => 30],
            [['HouseDescription', 'Address'], 'string', 'max' => 200]
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
            'Address' => 'Address',
            'Caretaker' => 'Caretaker',
            'ContactNo' => 'Contact No',
            'Price' => 'Price',
            'Size' => 'Size',
            'Distance' => 'Distance',
            'Long' => 'Long',
            'Lat' => 'Lat',
            'Featured' => 'Featured',
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
