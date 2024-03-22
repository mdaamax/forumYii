<?php

namespace app\repository;
use app\entity\Hotel;
use app\entity\Tours;

class HotelRepository extends \yii\web\Controller
{
    public static function getHotels(){
        return Hotel::find()-> all();
    }
    public static function getHotelById($hotel_id){
        return Hotel::find() -> where(['id'=> $hotel_id])->one();
    }


    public static function createHotel($name,$country_id,$price,$rating,$description = null){
        $hotel = new Hotel();
        $hotel -> name = $name;
        $hotel -> country_id = $country_id;
        $hotel -> price = $price;
        $hotel -> rating = $rating;
        $hotel -> description = $description;
        $hotel -> save();
        return $hotel -> id;
    }
}

