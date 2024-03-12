<?php

namespace app\entity;

use Yii;

/**
 * This is the model class for table "dir_countries".
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 *
 * @property Hotel[] $hotels
 */
class DirCountries extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dir_countries';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['description'], 'string'],
            [['name'], 'string', 'max' => 100],
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
            'description' => 'Description',
        ];
    }

    /**
     * Gets query for [[Hotels]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHotels()
    {
        return $this->hasMany(Hotel::class, ['country_id' => 'id']);
    }
}
