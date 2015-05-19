<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tenants".
 *
 * @property integer $TenantID
 * @property string $TenantName
 * @property string $Gender
 * @property string $Birthdate
 * @property string $Course
 * @property string $Job
 * @property string $Picture
 * @property integer $UnitID
 * @property string $IDNumber
 *
 * @property Units $unit
 */
class Tenants extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tenants';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TenantName', 'Gender', 'Birthdate', 'UnitID'], 'required'],
            [['Birthdate'], 'safe'],
            [['UnitID'], 'integer'],
            [['TenantName'], 'string', 'max' => 50],
            [['Gender'], 'string', 'max' => 10],
            [['Course', 'Job', 'Picture'], 'string', 'max' => 20],
            [['IDNumber'], 'string', 'max' => 15]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'TenantID' => 'Tenant ID',
            'TenantName' => 'Name',
            'Gender' => 'Gender',
            'Birthdate' => 'Birthdate',
            'Course' => 'Course',
            'Job' => 'Job',
            'Picture' => 'Picture',
            'UnitID' => 'Unit ID',
            'IDNumber' => 'ID Number',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUnit()
    {
        return $this->hasOne(Units::className(), ['UnitID' => 'UnitID']);
    }
}
