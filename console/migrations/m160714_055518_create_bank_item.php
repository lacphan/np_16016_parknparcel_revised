<?php

use yii\db\Migration;

class m160714_055518_create_bank_item extends Migration
{
    public function up()
    {

        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%bank_item}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
        ], $tableOptions);

        $this->insert('{{%bank_item}}',['id' => 1, 'name' => 'Bank 1']);
        $this->insert('{{%bank_item}}',['id' => 2, 'name' => 'Bank 2']);
        $this->insert('{{%bank_item}}',['id' => 3, 'name' => 'Bank 3']);

        return true;
    }

    public function down()
    {
        $this->dropTable('{{%bank_item}}');
        return true;
    }
}
