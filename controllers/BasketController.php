<?php

namespace app\controllers;
use app\repository\BasketRepository;

class BasketController extends \yii\web\Controller
{
    public function actionIndex(){
        $basket = BasketRepository::getBasket(\Yii::$app->user->id);
        return $this -> render('basket',['basket'=>$basket]);

    }

    public function actionBuy(){
        $basket = BasketRepository::getBasket(\Yii::$app->user->id);
        $sum = 0;
        foreach ($basket->basketToTours as $tours){
            $sum +=$tours-> price;
        }


        BasketRepository::buyBasket($basket -> id,$sum );

        return $this -> redirect('/basket');

    }
}