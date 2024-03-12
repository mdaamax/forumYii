<?php

namespace app\entity;

use Yii;

/**
 * This is the model class for table "basket_to_tours".
 *
 * @property int $id
 * @property int $basket_id
 * @property int $tour_id
 * @property int $human_count
 * @property int $price
 *
 * @property Basket $basket
 * @property Tours $tour
 */
class BasketToTours extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'basket_to_tours';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['basket_id', 'tour_id', 'human_count', 'price'], 'required'],
            [['basket_id', 'tour_id', 'human_count', 'price'], 'default', 'value' => null],
            [['basket_id', 'tour_id', 'human_count', 'price'], 'integer'],
            [['basket_id'], 'exist', 'skipOnError' => true, 'targetClass' => Basket::class, 'targetAttribute' => ['basket_id' => 'id']],
            [['tour_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tours::class, 'targetAttribute' => ['tour_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'basket_id' => 'Basket ID',
            'tour_id' => 'Tour ID',
            'human_count' => 'Human Count',
            'price' => 'Price',
        ];
    }

    /**
     * Gets query for [[Basket]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBasket()
    {
        return $this->hasOne(Basket::class, ['id' => 'basket_id']);
    }

    /**
     * Gets query for [[Tour]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTour()
    {
        return $this->hasOne(Tours::class, ['id' => 'tour_id']);
    }
}
