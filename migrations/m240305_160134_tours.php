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
            'human_count' => $this ->integer()-> defaultValue(1)-> notNull(),
            'title' => $this ->string(100) ->notNull(),
            'description' => $this -> text() ->null(),
            'short_description' => $this -> string(255) ->null(),
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
            'description' => $this -> text() ->null(),
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
        $this -> addForeignKey(
            'hotel_to_tours_fk',
            'tours',
            'hotel_id',
            'hotel',
            'id',
            'CASCADE',
            'CASCADE'
        );
        $this -> addForeignKey(
            'basket_to_tours_fk',
            'basket_to_tours',
            'basket_id',
            'basket',
            'id',
            'CASCADE',
            'CASCADE'
        );
        $this -> addForeignKey(
            'tours_to_basket_fk',
            'basket_to_tours',
            'tour_id',
            'tours',
            'id',
            'CASCADE',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {   $this -> dropTable('basket_to_tours');
        $this -> dropTable('basket');
        $this -> dropTable('tours');
        $this -> dropTable('hotel');
        $this -> dropTable('dir_country');
        echo 'УДАЛЕНО';
    }


}
