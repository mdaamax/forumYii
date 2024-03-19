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

    public static function createTour($price,$human_count,$title,$hotel_id,$short_description,$description = null){
        $tour = new Tours();
        $tour-> price = $price;
        $tour-> human_count = $human_count;
        $tour-> title = $title;
        $tour-> hotel_id= $hotel_id;
        $tour-> short_description = $short_description;
        $tour-> description = $description;
        $tour -> save();
        return $tour->id;
    }
}