<?php

namespace app\models;
class CountryImagesForm extends \yii\base\Model
{

    public $slider_images;
    public $main_image;

    public function rules()
    {
        return [
            [['slider_images', 'main_image'],'required'],
            [['slider_images'], 'file', 'extensions' => 'png, jpg, jpeg, webp','maxFiles'=>3],
            [['main_image'], 'file', 'extensions' => 'png, jpg, jpeg, webp'],

        ];
    }
}