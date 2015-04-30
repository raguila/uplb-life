<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "categories".
 *
 * @property integer $CategoryID
 * @property string $CategoryName
 *
 * @property HouseCategory[] $houseCategories
 * @property UnitCategory[] $unitCategories
 */
class Categories extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'categories';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CategoryName'], 'required'],
            [['CategoryName'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CategoryID' => 'Category ID',
            'CategoryName' => 'Category Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHouseCategories()
    {
        return $this->hasMany(HouseCategory::className(), ['CategoryID' => 'CategoryID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUnitCategories()
    {
        return $this->hasMany(UnitCategory::className(), ['CategoryID' => 'CategoryID']);
    }
}
