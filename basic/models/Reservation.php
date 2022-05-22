<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reservation".
 *
 * @property int $id
 * @property int $user_id
 * @property int $location_id
 * @property string $start_time
 * @property string $end_time
 */
class Reservation extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'reservation';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'location_id', 'start_time', 'end_time'], 'required'],
            [['id', 'user_id', 'location_id'], 'integer'],
            [['start_time', 'end_time'], 'safe'],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'location_id' => 'Location ID',
            'start_time' => 'Start Time',
            'end_time' => 'End Time',
        ];
    }
}
