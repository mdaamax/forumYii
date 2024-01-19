<?php

use yii\db\Migration;

/**
 * Class m240119_162712_topic
 */
class m240119_162712_topic extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('topic',[
            'id' => $this-> primaryKey(),
            'name' => $this -> string(100) -> notNull(),
            'subsection_id' => $this -> integer() -> notNull(),
            'user_id' => $this -> integer() -> notNull()
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this -> dropTable('topic');
        echo  'удалена';
    }
}
