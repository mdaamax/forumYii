<?php

namespace app\models;

use app\repository\UserRepository;

class BuyTourForm extends \yii\base\Model
{
    public $count;

    public function rules()
    {
        return [
            [['count'], 'required'],
            [['count'], 'integer'],

        ];
    }

}