<?php

use yii\db\Migration;

/**
 * Class m240122_172604_subsections
 */
class m240122_172604_subsections extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('subsections', [
            'id' => $this->primaryKey(),
            'name' => $this ->string(100) ->notNull(),
            'sections_id' => $this->integer()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this -> dropTable('subsections');
        echo 'Удалено';
    }
}
