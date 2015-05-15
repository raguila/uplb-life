<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pictures".
 *
 * @property integer $PictureID
 * @property string $PictureName
 * @property integer $HouseID
 * @property integer $UnitID
 * @property string $PictureType
 *
 * @property Houses $house
 * @property Units $unit
 */
class Pictures extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pictures';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['PictureName', 'HouseID', 'UnitID', 'PictureType'], 'required'],
            [['HouseID', 'UnitID'], 'integer'],
            [['PictureName'], 'string', 'max' => 30],
            [['PictureType'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'PictureID' => 'Picture ID',
            'PictureName' => 'Picture Name',
            'HouseID' => 'House ID',
            'UnitID' => 'Unit ID',
            'PictureType' => 'Picture Type',
        ];
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
