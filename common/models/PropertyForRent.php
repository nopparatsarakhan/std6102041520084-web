<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "property_for_rent".
 *
 * @property int $id
 * @property string $property_no
 * @property string $street
 * @property string $city
 * @property string $postcode
 * @property string $type
 * @property int $rooms
 * @property double $rent
 * @property int $owner_id
 * @property int $staff_id
 * @property int $branch_id
 */
class PropertyForRent extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'property_for_rent';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['property_no'], 'required'],
            [['street', 'city'], 'string'],
            [['rooms', 'owner_id', 'staff_id', 'branch_id'], 'integer'],
            [['rent'], 'number'],
            [['property_no'], 'string', 'max' => 5],
            [['postcode'], 'string', 'max' => 10],
            [['type'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'property_no' => 'Property No',
            'street' => 'Street',
            'city' => 'City',
            'postcode' => 'Postcode',
            'type' => 'Type',
            'rooms' => 'Rooms',
            'rent' => 'Rent',
            'owner_id' => 'Owner ID',
            'staff_id' => 'Staff ID',
            'branch_id' => 'Branch ID',
        ];
    }
}
