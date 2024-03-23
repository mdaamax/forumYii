<?php

namespace app\controllers;

use app\repository\BasketRepository;

class BasketController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $basket = BasketRepository::getBasket(\Yii::$app->user->id);
        return $this->render('basket', ['basket' => $basket]);
    }

    public function actionBuy()
    {
        $basket = BasketRepository::getBasket(\Yii::$app->user->id);
        $sum = 0;
        foreach ($basket->basketToTours as $tours) {
            $sum += $tours->price;
        }
        if ($sum < 1) {
            return $this->redirect("/basket");
        }
        BasketRepository::buyBasket($basket->id, $sum);
        return $this->redirect("/basket/success?basket_id={$basket->id}");
    }

    public function actionSuccess($basket_id)
    {
        $basket = BasketRepository::getBasketById($basket_id);
        return $this->render('success', ['basket' => $basket]);
    }

    public function actionHistory()
    {
        $baskets = BasketRepository::getHistoryByUserId(\Yii::$app->user->id);
        return $this->render('history', ['baskets' => $baskets]);
    }

    public function actionGlobalHistory()
    {
        $baskets = BasketRepository::getGlobalHistory();
        return $this->render('globalHistory', ['baskets' => $baskets]);
    }
}