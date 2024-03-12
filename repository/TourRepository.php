<?php

namespace app\repository;
use app\entity\Tours;

class TourRepository extends \yii\web\Controller
{
    public static function getTours(){
        return Tours::find()-> all();
    }
}