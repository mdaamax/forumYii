<?php

use yii\db\Migration;

/**
 * Class m240305_160134_tours
 */
class m240305_160134_tours extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this -> createTable('tours',[
            'id' => $this -> primaryKey(),
            'price' => $this ->integer() -> notNull(),
            'human_count' => $this ->integer(),
            'title' => $this ->string(100) ->notNull(),
            'description' => $this -> text() ->null(),
            'hotel_id' => $this -> integer() -> notNull(),
        ]);

        $this -> createTable('basket',[
            'id' => $this -> primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'price' => $this ->integer() -> null(),
            'timestamp' => $this->timestamp()->null(),
        ]);
        $this -> createTable('basket_to_tours',[
            'id' => $this -> primaryKey(),
            'basket_id' => $this->integer()->notNull(),
            'tour_id' => $this->integer()->notNull(),
            'human_count' => $this ->integer() -> notNull(),
            'price' => $this ->integer() -> notNull(),
        ]);

        $this -> createTable('hotel',[
            'id' => $this -> primaryKey(),
            'name' => $this ->string(100) ->notNull(),
            'country_id' => $this->integer()->notNull(),
            'description' => $this -> text() ->null(),
            'price' => $this ->integer() -> notNull(),
            'rating' => $this ->integer() -> notNull(),
        ]);
        $this -> createTable('dir_countries',[
            'id' => $this -> primaryKey(),
            'name' => $this ->string(100) ->notNull(),
        ]);
        $this -> addForeignKey(
          'hotel_to_country_fk',
          'hotel',
          'country_id',
          'dir_countries',
          'id',
          'CASCADE',
          'CASCADE'
        );
        $this -> addForeignKey(
            'basket_to_user_fk',
            'basket',
            'user_id',
            'users',
            'id',
            'CASCADE',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this -> dropTable('tours');
        echo 'УДАЛЕНО';
    }


}
