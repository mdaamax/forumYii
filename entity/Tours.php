<?php

namespace app\entity;

use Yii;

/**
 * This is the model class for table "tours".
 *
 * @property int $id
 * @property int $price
 * @property int $human_count
 * @property string $title
 * @property string|null $description
 * @property int $hotel_id
 *
 * @property BasketToTours[] $basketToTours
 * @property Hotel $hotel
 */
class Tours extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tours';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['price', 'title', 'hotel_id'], 'required'],
            [['price', 'human_count', 'hotel_id'], 'default', 'value' => null],
            [['price', 'human_count', 'hotel_id'], 'integer'],
            [['description'], 'string'],
            [['title'], 'string', 'max' => 100],
            [['hotel_id'], 'exist', 'skipOnError' => true, 'targetClass' => Hotel::class, 'targetAttribute' => ['hotel_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'price' => 'Price',
            'human_count' => 'Human Count',
            'title' => 'Title',
            'description' => 'Description',
            'hotel_id' => 'Hotel ID',
        ];
    }

    /**
     * Gets query for [[BasketToTours]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBasketToTours()
    {
        return $this->hasMany(BasketToTours::class, ['tour_id' => 'id']);
    }

    /**
     * Gets query for [[Hotel]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHotel()
    {
        return $this->hasOne(Hotel::class, ['id' => 'hotel_id']);
    }
}
