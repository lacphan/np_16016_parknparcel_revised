<?php

use yii\db\Migration;

class m160714_055519_create_collections_days_item extends Migration
{
    public function up()
    {

        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%collections_days_item}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
        ], $tableOptions);

        $this->insert('{{%collections_days_item}}',['id' => 1, 'name' => 'Monday - Friday']);
        $this->insert('{{%collections_days_item}}',['id' => 2, 'name' => 'Monday - Saturday']);
        $this->insert('{{%collections_days_item}}',['id' => 3, 'name' => 'Everyday']);

        return true;
    }

    public function down()
    {
        $this->dropTable('{{%collections_days_item}}');
        return true;
    }
}
