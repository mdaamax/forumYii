<?php

namespace app\repository;
use app\entity\Tours;

class TourRepository extends \yii\web\Controller
{
    public static function getTours(){
        return Tours::find()-> all();
    }
    public static function getTourById($tour_id){
        return Tours::find() -> where(['id'=> $tour_id])->one();
    }
}