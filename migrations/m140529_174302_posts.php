<?php

use yii\db\Schema;

class m140529_174302_posts extends \yii\db\Migration
{
    public function up()
    {
		return $this->createTable('posts', array(
				'id' => 'INT PRIMARY KEY AUTO_INCREMENT',
				'title' => 'VARCHAR(255)',
				'data' => 'TEXT',
				'create_time' => 'INT',
				'update_time' => 'INT'
			));
    }

    public function down()
    {
       return $this->dropTable('posts');
    }
}
