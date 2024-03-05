<?php

namespace app\entity;

use Yii;

/**
 * This is the model class for table "subsections".
 *
 * @property int $id
 * @property string $name
 * @property int $sections_id
 */
class Subsections extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'subsections';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'sections_id'], 'required'],
            [['sections_id'], 'default', 'value' => null],
            [['sections_id'], 'integer'],
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
            'sections_id' => 'Sections ID',
        ];
    }
}
