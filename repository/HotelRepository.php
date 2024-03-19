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
}