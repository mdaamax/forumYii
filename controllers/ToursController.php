<?php

namespace app\controllers;
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
}