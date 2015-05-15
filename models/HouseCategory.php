<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "house_category".
 *
 * @property integer $HouseID
 * @property integer $CategoryID
 *
 * @property Categories $category
 * @property Houses $house
 */
class HouseCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'house_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['HouseID', 'CategoryID'], 'required'],
            [['HouseID', 'CategoryID'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'HouseID' => 'House ID',
            'CategoryID' => 'Category ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Categories::className(), ['CategoryID' => 'CategoryID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHouse()
    {
        return $this->hasOne(Houses::className(), ['HouseID' => 'HouseID']);
    }
}
