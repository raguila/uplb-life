<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "units".
 *
 * @property integer $UnitID
 * @property string $UnitName
 * @property string $UnitDescription
 * @property integer $NumberOfTenants
 * @property integer $HouseID
 */
class Units extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'units';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['UnitName', 'UnitDescription', 'NumberOfTenants', 'HouseID'], 'required'],
            [['NumberOfTenants', 'HouseID'], 'integer'],
            [['UnitName'], 'string', 'max' => 30],
            [['UnitDescription'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'UnitID' => 'Unit ID',
            'UnitName' => 'Unit Name',
            'UnitDescription' => 'Unit Description',
            'NumberOfTenants' => 'Number Of Tenants',
            'HouseID' => 'House ID',
        ];
    }
}
