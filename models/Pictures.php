<?php

namespace app\models;

use Yii;

use app\models\Houses;


/**
 * This is the model class for table "pictures".
 *
 * @property integer $PictureID
 * @property string $PictureName
 * @property string $PictureDescription
 * @property integer $HouseID
 * @property string $PictureType
 *
 * @property Houses $house
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
            [['PictureDescription', 'HouseID'], 'required'],
            [['HouseID'], 'integer'],
            [['PictureDescription'], 'string', 'max' => 50],
            [['PictureType'], 'safe']
            //[['PictureType'], 'string', 'max' => 100]
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
            'PictureDescription' => 'Picture Description',
            'HouseID' => 'House ID',
            'PictureType' => 'Picture Type',
            'HouseName' => 'House Name'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHouse()
    {
        return $this->hasOne(Houses::className(), ['HouseID' => 'HouseID']);
    }

    public function getHouseName() 
    {
        Yii::info($this->house, __METHOD__);
        return $this->house->HouseName;
    }
}
