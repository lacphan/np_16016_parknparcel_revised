<?php

use yii\db\Migration;

class m160714_055520_create_parker_item extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%parker_item}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(),
            'nric_number' => $this->string(),
            'attachment_id' => $this->integer(),
            'bank_id' => $this->integer(),
            'bank_account_number' => $this->string(255),
            'collection_days_id' => $this->integer(255),
            'collection_start_at' => $this->time(),
            'collection_end_at' => $this->time(),
        ], $tableOptions);
        $this->addForeignKey('FK_ParkerItem_User', '{{%parker_item}}', 'user_id', '{{%user}}', 'id', 'NO ACTION', 'CASCADE');
        $this->addForeignKey('FK_ParkerItem_CollectionDay', '{{%parker_item}}', 'collection_days_id', '{{%collections_days_item}}', 'id', 'NO ACTION', 'CASCADE');
        $this->addForeignKey('FK_ParkerItem_Bank', '{{%parker_item}}', 'bank_id', '{{%bank_item}}', 'id', 'NO ACTION', 'CASCADE');

        return true;
    }

    public function down()
    {
        $this->dropForeignKey('FK_ParkerItem_User','{{%parker_item}}');
        $this->dropForeignKey('FK_ParkerItem_CollectionDay','{{%parker_item}}');
        $this->dropForeignKey('FK_ParkerItem_Bank','{{%parker_item}}');
        $this->dropTable('{{%parker_item}}');

        return true;
    }

}
