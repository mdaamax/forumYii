<?php

namespace app\repository;
use app\entity\Basket;
use app\entity\BasketToTours;

class BasketRepository
{
    public static function getBasketById($basket_id){
        return Basket::find() -> where(['id'=>$basket_id])->one();
    }

    public static function getHistoryByUserId($user_id){
        return Basket::find()
            ->where(['user_id'=>$user_id])
            ->andWhere(['not',['is','price', null]])
            ->andWhere(['not',['is','timestamp', null]])
            ->all();
    }

    public static function getGlobalHistory(){
        return Basket::find()
            ->where(['not',['is','price', null]])
            ->andWhere(['not',['is','timestamp', null]])
            ->all();
    }

    public static function getBasket($user_id){
        $basket = Basket::find() -> where(['user_id'=>$user_id,'timestamp'=>null])->one();
        if (empty($basket)){
            $basket = new Basket();
            $basket -> user_id = $user_id;
            $basket -> save();
        }
        return $basket;
    }

    public static function addToBasket($basket_id,$tour_id,$count,$price){
        $btt = new BasketToTours();
        $btt -> basket_id = $basket_id;
        $btt -> tour_id = $tour_id;
        $btt -> human_count = $count;
        $btt -> price = $price;
        $btt -> save();
    }
    public static function buyBasket($basket_id,$price){
        $basket = self::getBasketById($basket_id);
        $basket -> price = $price;
        $basket -> timestamp = date('Y-m-d H:i:s');
        $basket -> save();
    }
}
