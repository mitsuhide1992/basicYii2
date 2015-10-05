<?php

namespace app\models;

use Yii;
use yii\data\ActiveDataProvider;
use app\models\User;
/**
 * This is the model class for table "userinfo".
 *
 * @property string $emailAddress
 * @property string $username
 * @property string $addressOne
 * @property string $addressTwo
 * @property string $suburb
 * @property string $Poscode
 * @property string $phoneNumber
 * @property string $birthDate
 * @property string $password
 */
class Userinfo extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    public $usernameL;
    public $passwordL;
    public $emailAddressL;
    public $authKey;
    public $accessToken;
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'userinfo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['emailAddress', 'username', 'phoneNumber', 'password'], 'required'],
            [['birthDate'], 'safe'],
            [['emailAddress', 'username', 'addressOne', 'addressTwo', 'suburb'], 'string', 'max' => 255],
            [['Poscode'], 'string', 'max' => 10],
            [['phoneNumber', 'password'], 'string', 'max' => 30],
            [['username'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'emailAddress' => 'Email Address',
            'username' => 'Username',
            'addressOne' => 'Address One',
            'addressTwo' => 'Address Two',
            'suburb' => 'Suburb',
            'Poscode' => 'Poscode',
            'phoneNumber' => 'Phone Number',
            'birthDate' => 'Birth Date',
            'password' => 'Password',
        ];
    }

    /**
     * Validates password
     *
     * @param  string  $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return $this->passwordL === $password;
    }

    /**
     * Finds user by username
     *
     * @param  string      $username
     * @return static|null
     */
    public static function validateUsername($username, $password)
    {
        try {
            $records = Yii::$app->db->createCommand("select * from userinfo where username = '".$username."'")->queryAll();
        } catch (Exception $e) {
            var_dump($e);
        }

        if ($records && $records[0]["password"] == $password) {
            $currentUser = [
                'usernameL' => $records[0]["username"],
                'passwordL' => $records[0]["password"],
                'emailAddressL' => $records[0]["emailAddress"],
                'authKey' => 'test100key',
                'accessToken' => '100-token',
            ];
            return new static($currentUser);
        }

        return null;
    }

    /**
     * @inheritdoc
     */
    public static function findIdentity($username)
    {
        // return isset(self::$users[$id]) ? new static(self::$users[$id]) : null;
        try {
            $uInfo = Yii::$app->db->createCommand("select * from userinfo where username = '".$username."'")->queryAll();
        } catch (Exception $e) {
            var_dump($e);
        }

        if ($uInfo) {
            $currentUser = [
                'usernameL' => $uInfo[0]["username"],
                'passwordL' => $uInfo[0]["password"],
                'emailAddressL' => $uInfo[0]["emailAddress"],
                'authKey' => 'zlykey',
                'accessToken' => 'zlytoken',
            ];
            return new static($currentUser);
        } 
        return null;
    }


    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return null;
    }


     /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->usernameL;
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->authKey;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }


}
