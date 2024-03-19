<?php

namespace app\controllers;
use app\models\BuyTourForm;
use app\models\CreateTourForm;
use app\repository\BasketRepository;
use app\repository\CountryRepository;
use app\repository\HotelRepository;
use app\repository\TourRepository;
use yii\web\UploadedFile;

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

    public function actionCreateTour(){
        $model = new CreateTourForm();
        if ($model ->load(\Yii::$app->request->post())){
            $model->main_img = UploadedFile::getInstance($model, 'main_img');
            $model->slider_images = UploadedFile::getInstances($model, 'slider_images');
            if($model->validate()){
                $tour_id = TourRepository::createTour(
                    $model -> price,
                    $model -> human_count,
                    $model -> title,
                    $model -> hotel_id,
                    $model -> short_description,
                    $model -> description
                );

                $alias = \Yii::getAlias("@app/upload/tours/{$tour_id}");
                if (!is_dir($alias)) {
                    mkdir($alias, 777, true);
                }
                array_map("unlink",glob("$alias/*"));
                $model->main_img->saveAs("{$alias}/main.{$model->main_img->extension}");
                mkdir("{$alias}/slider", 777, true);
                foreach ($model->slider_images as $index=>$image){
                    $num = $index + 1;
                    $image->saveAs("{$alias}/slider/{$num}.{$image->extension}");
                }

                return $this -> redirect('/');
            }
        }
        $hotels_entity = HotelRepository::getHotels();
        $hotels = [];
        foreach ($hotels_entity as $hotel){
            $hotels[$hotel -> id]= $hotel -> name;
        }
        return $this -> render('create_tour',['model'=>$model,'hotels'=>$hotels]);
    }

    public function actionImage($path){
        $path = str_replace('-','/', $path);
        $alias = \Yii::getAlias("@app/upload/{$path}");
        $path = glob("$alias.*")[0];
        $file = file_get_contents($path);
        $temp = explode('/',$path);
        $filename = $temp[count($temp)-1];
        \Yii::$app->response->sendContentAsFile($file, $filename, [
            'inline' => true,
            'mimeType' => mime_content_type($path)
        ]);
    }
}