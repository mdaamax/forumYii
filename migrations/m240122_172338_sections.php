<?php

use yii\db\Migration;

/**
 * Class m240122_172338_sections
 */
class m240122_172338_sections extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('sections', [
            'id' => $this->primaryKey(),
            'name' => $this ->string(100) ->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this -> dropTable('sections');
        echo 'Удалено';
    }

}
