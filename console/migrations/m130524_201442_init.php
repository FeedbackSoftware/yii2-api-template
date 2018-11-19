<?php

use yii\db\Migration;

class m130524_201442_init extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%user}}', [
            'id' => $this->string(36)->notNull(),
            'username' => $this->string()->notNull()->unique(),
            'auth_key' => $this->string(32)->notNull(),
            'access_token' => $this->string(46)->notNull(),
            'refresh_token' => $this->string(46)->notNull(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string()->unique(),
            'email' => $this->string()->notNull()->unique(),

            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer(13)->notNull(),
            'updated_at' => $this->integer(13)->notNull(),
            'created_by' => $this->string(36)->notNull(),
            'updated_by' => $this->string(36)->notNull(),
        ], $tableOptions);

        $this->addPrimaryKey('user_pk', '{{%user}}', ['id']);
    }

    public function down()
    {
        $this->dropTable('{{%user}}');
    }
}
