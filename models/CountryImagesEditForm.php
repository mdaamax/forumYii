<?php

namespace app\models;
class CountryImagesEditForm extends \yii\base\Model
{

    public $slider_images;
    public $updateImg;

    public function rules()
    {
        return [
            [['updateImg'],'required'],
            [['slider_images'], 'file', 'extensions' => 'png, jpg','maxFiles'=>3],
            [['updateImg'],'boolean'],
        ];
    }
}