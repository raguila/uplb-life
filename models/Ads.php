<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ads".
 *
 * @property integer $AdsID
 * @property integer $UserID
 * @property string $Image
 * @property string $Description
 * @property string $TimeStamp
 * @property integer $Period
 * @property integer $Priority
 */
class Ads extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ads';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['UserID', 'Image', 'Description', 'Period', 'Priority'], 'required'],
            [['UserID', 'Period', 'Priority'], 'integer'],
            [['TimeStamp'], 'safe'],
            [['Image', 'Description'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'AdsID' => 'Ads ID',
            'UserID' => 'User ID',
            'Image' => 'Image',
            'Description' => 'Description',
            'TimeStamp' => 'Time Stamp',
            'Period' => 'Period',
            'Priority' => 'Priority',
        ];
    }
}
