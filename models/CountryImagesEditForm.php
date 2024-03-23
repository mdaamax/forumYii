<?php

namespace app\models;
class CountryImagesEditForm extends \yii\base\Model
{

    public $slider_images;
    public $main_image;
    public $updateImg;

    public function rules()
    {
        return [
            [['updateImg'],'required'],
            [['slider_images'], 'file', 'extensions' => 'png, jpg, jpeg, webp','maxFiles'=>3],
            [['main_image'], 'file', 'extensions' => 'png, jpg, jpeg, webp'],
            [['updateImg'],'boolean'],
        ];
    }
}