<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shelter2".
 *
 * @property int $id
 * @property string $title
 * @property string $location
 * @property string $admin_name
 * @property string $admin_phone
 * @property int $ocupants
 * @property int $capacity
 * @property int $map_user
 */
class Shelter2 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'shelter2';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'location', 'admin_name', 'admin_phone', 'ocupants', 'capacity', 'map_user'], 'required'],
            [['ocupants', 'capacity', 'map_user'], 'integer'],
            [['title', 'location'], 'string', 'max' => 20],
            [['admin_name'], 'string', 'max' => 25],
            [['admin_phone'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'location' => 'Location',
            'admin_name' => 'Admin Name',
            'admin_phone' => 'Admin Phone',
            'ocupants' => 'Ocupants',
            'capacity' => 'Capacity',
            'map_user' => 'Map User',
        ];
    }
}
