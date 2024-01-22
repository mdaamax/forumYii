<?php

use yii\db\Migration;

/**
 * Class m240122_171345_masseges
 */
class m240122_171345_masseges extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('messages', [
            'id' => $this->primaryKey(),
            'content' => $this->string()->notNull(),
            'timestamp' => $this->timestamp()->defaultExpression('NOW()')->notNull(),
            'user_id' => $this->integer()->notNull(),
            'topic_id' => $this->integer()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this -> dropTable('messages');
        echo 'Удалено';
    }


}
