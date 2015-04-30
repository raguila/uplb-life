<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "unit_category".
 *
 * @property integer $UnitCategoryID
 * @property integer $UnitID
 * @property integer $CategoryID
 *
 * @property Categories $category
 * @property Units $unit
 */
class UnitCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'unit_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['UnitID', 'CategoryID'], 'required'],
            [['UnitID', 'CategoryID'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'UnitCategoryID' => 'Unit Category ID',
            'UnitID' => 'Unit ID',
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
    public function getUnit()
    {
        return $this->hasOne(Units::className(), ['UnitID' => 'UnitID']);
    }
}
