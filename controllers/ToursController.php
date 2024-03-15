<?php

namespace app\controllers;
use app\models\BuyTourForm;
use app\repository\BasketRepository;
use app\repository\CountryRepository;
use app\repository\TourRepository;

class ToursController extends \yii\web\Controller
{
    public function actionCatalog(){
        $tours = TourRepository::getTours();
        return $this -> render('catalog',['tours'=>$tours]);
    }
    public function actionCountry(){
        $country = CountryRepository::getCountry();
        return $this -> render('country',['country'=>$country]);
    }
    public function actionTour(int $tour_id){
        $tour = TourRepository::getTourById($tour_id);
        $model = new BuyTourForm();
        if ($model->load(\Yii::$app->request->post()) && $model->validate()){
            $basket = BasketRepository::getBasket(\Yii::$app->user->id);
            BasketRepository::addToBasket(
                $basket->id,
                $tour_id,
                $model->count,
                $model->count*$tour->price
            );
            return $this -> redirect('/basket');
        }
        return $this -> render('tour',['tour'=>$tour,'model'=> $model]);
    }
}