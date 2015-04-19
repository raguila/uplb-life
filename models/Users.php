<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property integer $UserID
 * @property integer $UserTypeID
 * @property string $UserName
 * @property string $Password
 * @property string $FirstName
 * @property string $MiddleName
 * @property string $LastName
 * @property string $Picture
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['UserTypeID', 'UserName', 'Password', 'FirstName', 'MiddleName', 'LastName', 'Picture'], 'required'],
            [['UserTypeID'], 'integer'],
            [['UserName', 'FirstName', 'MiddleName', 'LastName', 'Picture'], 'string', 'max' => 20],
            [['Password'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'UserID' => 'User ID',
            'UserTypeID' => 'User Type ID',
            'UserName' => 'User Name',
            'Password' => 'Password',
            'FirstName' => 'First Name',
            'MiddleName' => 'Middle Name',
            'LastName' => 'Last Name',
            'Picture' => 'Picture',
        ];
    }
}
