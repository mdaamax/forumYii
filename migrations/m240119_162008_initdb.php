<?php

use yii\db\Migration;

/**
 * Class m240119_162008_initdb
 */
class m240119_162008_initdb extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('users',[
            'id' => $this-> primaryKey(),
            'email' => $this -> string(100) -> unique()-> notNull(),
            'password'=> $this -> string(120) -> notNull(),
            'name' => $this -> string(100) -> notNull(),
        ]);

        $this-> insert('users',[
            'email' => 'admin@admin.admin',
            'password'=> password_hash('admin', PASSWORD_DEFAULT),
            'name' => 'admin',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this -> dropTable('users');
        echo  'удалена';
    }
}
