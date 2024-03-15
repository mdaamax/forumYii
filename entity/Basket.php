<?php

namespace app\entity;

use Yii;

/**
 * This is the model class for table "basket".
 *
 * @property int $id
 * @property int $user_id
 * @property int|null $price
 * @property string|null $timestamp
 *
 * @property BasketToTours[] $basketToTours
 * @property Users $user
 */
class Basket extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'basket';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id'], 'required'],
            [['user_id', 'price'], 'default', 'value' => null],
            [['user_id', 'price'], 'integer'],
            [['timestamp'], 'safe'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => Users::class, 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'price' => 'Price',
            'timestamp' => 'Timestamp',
        ];
    }

    /**
     * Gets query for [[BasketToTours]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBasketToTours()
    {
        return $this->hasMany(BasketToTours::class, ['basket_id' => 'id']);
    }
    public function getTours()
    {
        return $this->hasMany(Tours::class, ['id' => 'tour_id'])
            ->viaTable(BasketToTours::tableName(),['basket_id' => 'id']);
    }
    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Users::class, ['id' => 'user_id']);
    }
}
