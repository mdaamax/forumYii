<?php

namespace app\models;

class CreateHotelForm extends \yii\base\Model
{
    public $name;
    public $country_id;
    public $description;
    public $price;
    public $rating;


    public function rules()
    {
        return [
            [['name','country_id','description','price','rating'],'required']
        ];
    }
}