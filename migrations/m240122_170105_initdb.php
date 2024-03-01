<?php

use yii\db\Migration;

/**
 * Class m240122_170105_initdb
 */
class m240122_170105_initdb extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this -> createTable('users',[
           'id' => $this -> primaryKey(),
            'email' => $this ->string(100) -> unique() ->notNull(),
            'password' => $this ->string(100) ->notNull(),
        ]);
        $this -> insert('users',[
           'email' => 'admin@admin.admin',
           'password' => password_hash('admin', PASSWORD_DEFAULT),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this -> dropTable('users');
        echo 'УДАЛЕНО';
    }


}
