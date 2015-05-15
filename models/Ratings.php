<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ratings".
 *
 * @property integer $RatingID
 * @property integer $UserID
 * @property integer $Rating
 * @property string $Timestamp
 * @property integer $UnitID
 *
 * @property Units $unit
 * @property Users $user
 */
class Ratings extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ratings';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['UserID', 'Rating', 'Timestamp', 'UnitID'], 'required'],
            [['UserID', 'Rating', 'UnitID'], 'integer'],
            [['Timestamp'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'RatingID' => 'Rating ID',
            'UserID' => 'User ID',
            'Rating' => 'Rating',
            'Timestamp' => 'Timestamp',
            'UnitID' => 'Unit ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUnit()
    {
        return $this->hasOne(Units::className(), ['UnitID' => 'UnitID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Users::className(), ['UserID' => 'UserID']);
    }
}
