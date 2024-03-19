<?php

namespace app\models;
class CreateTourForm extends \yii\base\Model
{
    public $price;
    public $human_count;
    public $title;
    public $description;
    public $hotel_id;
    public $short_description;
    public $main_img;
    public $slider_images;

    public function rules()
    {
        return [
            [['price','human_count','title','short_description','hotel_id','main_img','slider_images'],'required'],
            [['main_img'], 'file', 'extensions' => 'png, jpg'],
            [['slider_images'], 'file', 'extensions' => 'png, jpg','maxFiles'=>4],
            ['description','string']
        ];
    }
}