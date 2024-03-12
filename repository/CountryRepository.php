<?php

namespace app\repository;
use app\entity\DirCountries;

class CountryRepository extends \yii\web\Controller
{
    public static function getCountry(){
        return DirCountries::find()-> all();
    }
}