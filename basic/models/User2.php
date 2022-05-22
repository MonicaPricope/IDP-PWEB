<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user2".
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $name
 * @property int $type
 */
class User2 extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user2';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password', 'name', 'type'], 'required'],
            [['type'], 'integer'],
            [['username', 'password'], 'string', 'max' => 20],
            [['name'], 'string', 'max' => 25],
            [['id', 'username', 'name', 'type', 'password'],'safe'],
            [['username'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'name' => 'Name',
            'type' => 'Type',
        ];
    }
    public function getAuthKey()
    {
        #throw new \yii\base\NotSupportedException();

    }

    public function getId()
    {
        return $this->id;
    }
    
    public function validateAuthKey($authKey)
    {
        #throw new \yii\base\NotSupportedException();

    }

    public static function findIdentity($id){
        return static::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        #throw new \yii\base\NotSupportedException();
    }

    public static function findByUsername($username){
        $u = User2::find()
            ->where(['username' => $username])
            ->one();
        
        return $u;
        
    }

    public function validatePassword($password){
        return $this->password === $password;
    }
}
