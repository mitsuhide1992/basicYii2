<?php

namespace app\models;

use Yii;

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
class Userinfo extends \yii\db\ActiveRecord
{
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
}
