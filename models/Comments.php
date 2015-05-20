<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "comments".
 *
 * @property integer $CommentID
 * @property integer $UserID
 * @property string $Comment
 * @property integer $UnitID
 * @property string $TImestamp
 */
class Comments extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comments';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['UserID', 'Comment', 'UnitID'], 'required'],
            [['UserID', 'UnitID'], 'integer'],
            [['TImestamp'], 'safe'],
            [['Comment'], 'string', 'max' => 160]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CommentID' => 'Comment ID',
            'UserID' => 'User ID',
            'Comment' => 'Comment',
            'UnitID' => 'Unit ID',
            'TImestamp' => 'Timestamp',
        ];
    }
}
