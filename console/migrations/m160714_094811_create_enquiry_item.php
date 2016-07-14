<?php

use yii\db\Migration;

class m160714_094811_create_enquiry_item extends Migration
{
    public function up()
    {

        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%enquiry_item}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
        ], $tableOptions);

        $this->addForeignKey('FK_UserProfile_Enquiry', '{{%user_profile}}', 'enquiry_id', '{{%enquiry_item}}', 'id', 'NO ACTION', 'CASCADE');

        $this->insert('{{%enquiry_item}}',['id' => 1, 'name' => 'Enquiry 1']);
        $this->insert('{{%enquiry_item}}',['id' => 2, 'name' => 'Enquiry 2']);
        $this->insert('{{%enquiry_item}}',['id' => 3, 'name' => 'Enquiry 3']);
        
        return true;
    }

    public function down()
    {
        $this->dropForeignKey('FK_UserProfile_Enquiry','{{%enquiry_item}}');
        $this->dropTable('{{%enquiry_item}}');
        return true;
    }
}
