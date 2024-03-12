<?php

namespace app\models;

use app\repository\UserRepository;

class RegistrationForm extends \yii\base\Model
{
    public $password;
    public $email;
    public $lastname;
    public $firstname;
    public $patronymic;
    public $passwordRepeat;
    public function rules()
    {
        return [
            [['email','lastname','firstname','password','passwordRepeat'], 'required'],
            ['email', 'email'],
            ['patronymic', 'string'],
            ['passwordRepeat', 'compare', 'compareAttribute' => 'password']
        ];
    }
    public function validateEmail($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = UserRepository::getUserByEmail($this->email);
            if ($user) {
                $this->addError($attribute, 'Incorrect username or password.');
            }
        }
    }
}