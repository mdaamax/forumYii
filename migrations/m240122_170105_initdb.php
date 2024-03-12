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
            'firstname' => $this ->string(100) ->notNull(),
            'lastname' => $this ->string(100) ->notNull(),
            'patronymic' => $this ->string(100) ->null(),
            'password' => $this ->string(100) ->notNull(),
        ]);
        $this -> insert('users',[
           'email' => 'admin@admin.admin',
           'firstname' => 'Админ',
           'lastname' => 'Админов',
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
