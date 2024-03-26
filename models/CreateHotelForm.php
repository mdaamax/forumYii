<?php

namespace app\models;

class CreateHotelForm extends \yii\base\Model
{
    public $name;
    public $country_id;
    public $description;
    public $price;
    public $rating;
    public $main_img;


    public function rules()
    {
        return [
            [['name','country_id','price','main_img','rating'],'required'],
            [['main_img'], 'file', 'extensions' => 'png, jpg, jpeg'],
            ['description','string']
        ];
    }
}