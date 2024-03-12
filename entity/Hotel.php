<?php

namespace app\entity;

use Yii;

/**
 * This is the model class for table "hotel".
 *
 * @property int $id
 * @property string $name
 * @property int $country_id
 * @property string|null $description
 * @property int $price
 * @property int $rating
 *
 * @property DirCountries $country
 * @property Tours[] $tours
 */
class Hotel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hotel';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'country_id', 'price', 'rating'], 'required'],
            [['country_id', 'price', 'rating'], 'default', 'value' => null],
            [['country_id', 'price', 'rating'], 'integer'],
            [['description'], 'string'],
            [['name'], 'string', 'max' => 100],
            [['country_id'], 'exist', 'skipOnError' => true, 'targetClass' => DirCountries::class, 'targetAttribute' => ['country_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'country_id' => 'Country ID',
            'description' => 'Description',
            'price' => 'Price',
            'rating' => 'Rating',
        ];
    }

    /**
     * Gets query for [[Country]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCountry()
    {
        return $this->hasOne(DirCountries::class, ['id' => 'country_id']);
    }

    /**
     * Gets query for [[Tours]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTours()
    {
        return $this->hasMany(Tours::class, ['hotel_id' => 'id']);
    }
}
