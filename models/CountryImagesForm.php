<?php

namespace app\models;
class CountryImagesForm extends \yii\base\Model
{

    public $slider_images;

    public function rules()
    {
        return [
            [['slider_images'],'required'],
            [['slider_images'], 'file', 'extensions' => 'png, jpg, jpeg, webp','maxFiles'=>3],

        ];
    }
}