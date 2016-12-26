<?php

use yii\db\Migration;

class m161226_085926_comments extends Migration
{
    public function safeUp()
    {
        $this->createTable('blog_comments', array(
            'id' => 'pk',
            'name' => 'VARCHAR(255) NOT NULL',
            'email' => 'VARCHAR(255) NOT NULL',
            'text' => 'text NOT NULL',
//            'date' => 'date NOT NULL',
//            'post_id' => 'int(10) NOT NULL',
        ) , 'ENGINE=InnoDB CHARSET=utf8');

//        $this->addForeignKey('blog_comments_post', 'blog_comments', 'post_id', 'blog_post', 'id');
    }

    public function safeDown()
    {
        $this->dropTable('blog_comments');
    }
}
