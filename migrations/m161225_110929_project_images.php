<?php

use yii\db\Migration;

class m161225_110929_project_images extends Migration
{
    public function safeUp()
    {
        // добавление колонок в таблицу project
        $this->addColumn('project', 'min_img', 'VARCHAR(200) NOT NULL');
        $this->addColumn('project', 'big_img', 'VARCHAR(200) NOT NULL');

        // заполнение колонки
        $this->update('project', array('min_img' => '223x112.gif', 'big_img' => '600x300.gif'), 'id=1');
        $this->update('project', array('min_img' => '223x112.gif', 'big_img' => '600x300.gif'), 'id=2');
        $this->update('project', array('min_img' => '223x112.gif', 'big_img' => '600x300.gif'), 'id=3');
        $this->update('project', array('min_img' => '223x112.gif', 'big_img' => '600x300.gif'), 'id=4');
        $this->update('project', array('min_img' => '223x112.gif', 'big_img' => '600x300.gif'), 'id=5');
        $this->update('project', array('min_img' => '223x112.gif', 'big_img' => '600x300.gif'), 'id=6');
        $this->update('project', array('min_img' => '223x112.gif', 'big_img' => '600x300.gif'), 'id=7');
        $this->update('project', array('min_img' => '223x112.gif', 'big_img' => '600x300.gif'), 'id=8');
        $this->update('project', array('min_img' => '223x112.gif', 'big_img' => '600x300.gif'), 'id=9');
        $this->update('project', array('min_img' => '223x112.gif', 'big_img' => '600x300.gif'), 'id=10');
        $this->update('project', array('min_img' => '223x112.gif', 'big_img' => '600x300.gif'), 'id=11');
        $this->update('project', array('min_img' => '223x112.gif', 'big_img' => '600x300.gif'), 'id=12');
        $this->update('project', array('min_img' => '223x112.gif', 'big_img' => '600x300.gif'), 'id=13');
        $this->update('project', array('min_img' => '223x112.gif', 'big_img' => '600x300.gif'), 'id=14');
        $this->update('project', array('min_img' => '223x112.gif', 'big_img' => '600x300.gif'), 'id=15');
        $this->update('project', array('min_img' => '223x112.gif', 'big_img' => '600x300.gif'), 'id=16');
        $this->update('project', array('min_img' => '223x112.gif', 'big_img' => '600x300.gif'), 'id=17');
        $this->update('project', array('min_img' => '223x112.gif', 'big_img' => '600x300.gif'), 'id=18');

        // отдельная таблица с изображениями
        $this->createTable('project_images', array(
            'id' => 'pk',
            'project_id' => 'int(10) NOT NULL',
            'images' => 'VARCHAR(200) NOT NULL',
            'description' => 'VARCHAR(200) NOT NULL',
        ) , 'ENGINE=InnoDB CHARSET=utf8');

        // связь
        $this->addForeignKey('portfolio_project_images', 'project_images', 'project_id', 'project', 'id');

        // заполнение таблицы
        $this->insert('project_images', array('project_id' => '1', 'images' => '600x300.gif', 'description' => 'Homepage'));
        $this->insert('project_images', array('project_id' => '1', 'images' => '600x300.gif', 'description' => 'Content Page'));
        $this->insert('project_images', array('project_id' => '1', 'images' => '600x300.gif', 'description' => 'Dropdown Menu'));
        $this->insert('project_images', array('project_id' => '1', 'images' => '600x300.gif', 'description' => 'Comments List'));
        $this->insert('project_images', array('project_id' => '1', 'images' => '600x300.gif', 'description' => 'Comment Form'));
        $this->insert('project_images', array('project_id' => '2', 'images' => '600x300.gif', 'description' => 'Homepage'));
        $this->insert('project_images', array('project_id' => '2', 'images' => '600x300.gif', 'description' => 'Content Page'));
        $this->insert('project_images', array('project_id' => '2', 'images' => '600x300.gif', 'description' => 'Dropdown Menu'));
        $this->insert('project_images', array('project_id' => '2', 'images' => '600x300.gif', 'description' => 'Comments List'));
        $this->insert('project_images', array('project_id' => '2', 'images' => '600x300.gif', 'description' => 'Comment Form'));
        $this->insert('project_images', array('project_id' => '3', 'images' => '600x300.gif', 'description' => 'Homepage'));
        $this->insert('project_images', array('project_id' => '3', 'images' => '600x300.gif', 'description' => 'Content Page'));
        $this->insert('project_images', array('project_id' => '3', 'images' => '600x300.gif', 'description' => 'Dropdown Menu'));
        $this->insert('project_images', array('project_id' => '3', 'images' => '600x300.gif', 'description' => 'Comments List'));
        $this->insert('project_images', array('project_id' => '3', 'images' => '600x300.gif', 'description' => 'Comment Form'));
        $this->insert('project_images', array('project_id' => '4', 'images' => '600x300.gif', 'description' => 'Homepage'));
        $this->insert('project_images', array('project_id' => '4', 'images' => '600x300.gif', 'description' => 'Content Page'));
        $this->insert('project_images', array('project_id' => '4', 'images' => '600x300.gif', 'description' => 'Dropdown Menu'));
        $this->insert('project_images', array('project_id' => '4', 'images' => '600x300.gif', 'description' => 'Comments List'));
        $this->insert('project_images', array('project_id' => '4', 'images' => '600x300.gif', 'description' => 'Comment Form'));
        $this->insert('project_images', array('project_id' => '5', 'images' => '600x300.gif', 'description' => 'Homepage'));
        $this->insert('project_images', array('project_id' => '5', 'images' => '600x300.gif', 'description' => 'Content Page'));
        $this->insert('project_images', array('project_id' => '5', 'images' => '600x300.gif', 'description' => 'Dropdown Menu'));
        $this->insert('project_images', array('project_id' => '5', 'images' => '600x300.gif', 'description' => 'Comments List'));
        $this->insert('project_images', array('project_id' => '5', 'images' => '600x300.gif', 'description' => 'Comment Form'));
        $this->insert('project_images', array('project_id' => '6', 'images' => '600x300.gif', 'description' => 'Homepage'));
        $this->insert('project_images', array('project_id' => '6', 'images' => '600x300.gif', 'description' => 'Content Page'));
        $this->insert('project_images', array('project_id' => '6', 'images' => '600x300.gif', 'description' => 'Dropdown Menu'));
        $this->insert('project_images', array('project_id' => '6', 'images' => '600x300.gif', 'description' => 'Comments List'));
        $this->insert('project_images', array('project_id' => '6', 'images' => '600x300.gif', 'description' => 'Comment Form'));
        $this->insert('project_images', array('project_id' => '7', 'images' => '600x300.gif', 'description' => 'Homepage'));
        $this->insert('project_images', array('project_id' => '7', 'images' => '600x300.gif', 'description' => 'Content Page'));
        $this->insert('project_images', array('project_id' => '7', 'images' => '600x300.gif', 'description' => 'Dropdown Menu'));
        $this->insert('project_images', array('project_id' => '7', 'images' => '600x300.gif', 'description' => 'Comments List'));
        $this->insert('project_images', array('project_id' => '7', 'images' => '600x300.gif', 'description' => 'Comment Form'));
        $this->insert('project_images', array('project_id' => '8', 'images' => '600x300.gif', 'description' => 'Homepage'));
        $this->insert('project_images', array('project_id' => '8', 'images' => '600x300.gif', 'description' => 'Content Page'));
        $this->insert('project_images', array('project_id' => '8', 'images' => '600x300.gif', 'description' => 'Dropdown Menu'));
        $this->insert('project_images', array('project_id' => '8', 'images' => '600x300.gif', 'description' => 'Comments List'));
        $this->insert('project_images', array('project_id' => '8', 'images' => '600x300.gif', 'description' => 'Comment Form'));
        $this->insert('project_images', array('project_id' => '9', 'images' => '600x300.gif', 'description' => 'Homepage'));
        $this->insert('project_images', array('project_id' => '9', 'images' => '600x300.gif', 'description' => 'Content Page'));
        $this->insert('project_images', array('project_id' => '9', 'images' => '600x300.gif', 'description' => 'Dropdown Menu'));
        $this->insert('project_images', array('project_id' => '9', 'images' => '600x300.gif', 'description' => 'Comments List'));
        $this->insert('project_images', array('project_id' => '9', 'images' => '600x300.gif', 'description' => 'Comment Form'));
        $this->insert('project_images', array('project_id' => '10', 'images' => '600x300.gif', 'description' => 'Homepage'));
        $this->insert('project_images', array('project_id' => '10', 'images' => '600x300.gif', 'description' => 'Content Page'));
        $this->insert('project_images', array('project_id' => '10', 'images' => '600x300.gif', 'description' => 'Dropdown Menu'));
        $this->insert('project_images', array('project_id' => '10', 'images' => '600x300.gif', 'description' => 'Comments List'));
        $this->insert('project_images', array('project_id' => '10', 'images' => '600x300.gif', 'description' => 'Comment Form'));
        $this->insert('project_images', array('project_id' => '11', 'images' => '600x300.gif', 'description' => 'Homepage'));
        $this->insert('project_images', array('project_id' => '11', 'images' => '600x300.gif', 'description' => 'Content Page'));
        $this->insert('project_images', array('project_id' => '11', 'images' => '600x300.gif', 'description' => 'Dropdown Menu'));
        $this->insert('project_images', array('project_id' => '11', 'images' => '600x300.gif', 'description' => 'Comments List'));
        $this->insert('project_images', array('project_id' => '11', 'images' => '600x300.gif', 'description' => 'Comment Form'));
        $this->insert('project_images', array('project_id' => '12', 'images' => '600x300.gif', 'description' => 'Homepage'));
        $this->insert('project_images', array('project_id' => '12', 'images' => '600x300.gif', 'description' => 'Content Page'));
        $this->insert('project_images', array('project_id' => '12', 'images' => '600x300.gif', 'description' => 'Dropdown Menu'));
        $this->insert('project_images', array('project_id' => '12', 'images' => '600x300.gif', 'description' => 'Comments List'));
        $this->insert('project_images', array('project_id' => '12', 'images' => '600x300.gif', 'description' => 'Comment Form'));
        $this->insert('project_images', array('project_id' => '13', 'images' => '600x300.gif', 'description' => 'Homepage'));
        $this->insert('project_images', array('project_id' => '13', 'images' => '600x300.gif', 'description' => 'Content Page'));
        $this->insert('project_images', array('project_id' => '13', 'images' => '600x300.gif', 'description' => 'Dropdown Menu'));
        $this->insert('project_images', array('project_id' => '13', 'images' => '600x300.gif', 'description' => 'Comments List'));
        $this->insert('project_images', array('project_id' => '13', 'images' => '600x300.gif', 'description' => 'Comment Form'));
        $this->insert('project_images', array('project_id' => '14', 'images' => '600x300.gif', 'description' => 'Homepage'));
        $this->insert('project_images', array('project_id' => '14', 'images' => '600x300.gif', 'description' => 'Content Page'));
        $this->insert('project_images', array('project_id' => '14', 'images' => '600x300.gif', 'description' => 'Dropdown Menu'));
        $this->insert('project_images', array('project_id' => '14', 'images' => '600x300.gif', 'description' => 'Comments List'));
        $this->insert('project_images', array('project_id' => '14', 'images' => '600x300.gif', 'description' => 'Comment Form'));
        $this->insert('project_images', array('project_id' => '15', 'images' => '600x300.gif', 'description' => 'Homepage'));
        $this->insert('project_images', array('project_id' => '15', 'images' => '600x300.gif', 'description' => 'Content Page'));
        $this->insert('project_images', array('project_id' => '15', 'images' => '600x300.gif', 'description' => 'Dropdown Menu'));
        $this->insert('project_images', array('project_id' => '15', 'images' => '600x300.gif', 'description' => 'Comments List'));
        $this->insert('project_images', array('project_id' => '15', 'images' => '600x300.gif', 'description' => 'Comment Form'));
        $this->insert('project_images', array('project_id' => '16', 'images' => '600x300.gif', 'description' => 'Homepage'));
        $this->insert('project_images', array('project_id' => '16', 'images' => '600x300.gif', 'description' => 'Content Page'));
        $this->insert('project_images', array('project_id' => '16', 'images' => '600x300.gif', 'description' => 'Dropdown Menu'));
        $this->insert('project_images', array('project_id' => '16', 'images' => '600x300.gif', 'description' => 'Comments List'));
        $this->insert('project_images', array('project_id' => '16', 'images' => '600x300.gif', 'description' => 'Comment Form'));
        $this->insert('project_images', array('project_id' => '17', 'images' => '600x300.gif', 'description' => 'Homepage'));
        $this->insert('project_images', array('project_id' => '17', 'images' => '600x300.gif', 'description' => 'Content Page'));
        $this->insert('project_images', array('project_id' => '17', 'images' => '600x300.gif', 'description' => 'Dropdown Menu'));
        $this->insert('project_images', array('project_id' => '17', 'images' => '600x300.gif', 'description' => 'Comments List'));
        $this->insert('project_images', array('project_id' => '17', 'images' => '600x300.gif', 'description' => 'Comment Form'));
        $this->insert('project_images', array('project_id' => '18', 'images' => '600x300.gif', 'description' => 'Homepage'));
        $this->insert('project_images', array('project_id' => '18', 'images' => '600x300.gif', 'description' => 'Content Page'));
        $this->insert('project_images', array('project_id' => '18', 'images' => '600x300.gif', 'description' => 'Dropdown Menu'));
        $this->insert('project_images', array('project_id' => '18', 'images' => '600x300.gif', 'description' => 'Comments List'));
        $this->insert('project_images', array('project_id' => '18', 'images' => '600x300.gif', 'description' => 'Comment Form'));
    }

    public function safeDown()
    {
        $this->dropColumn('project', 'min_img');
        $this->dropColumn('project', 'big_img');
        $this->dropTable('project_images');
    }
}
