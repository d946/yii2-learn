<?php

use yii\db\Migration;

/**
 * Handles the creation of table `users`.
 */
class m180114_181147_create_users_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('users', [
            'id' => $this->primaryKey(),
            'login' => $this->string(255),
            'username' => $this->string(255),
            'password' => $this->string(255),
        ]);
        $this->insert('users', [
            'login' => 'admin@admin.ru',
            'username' => 'admin',
            'password' => '$2y$10$dvi1wrcu5/B3SZuVdNLLROyFQucKZ6XRCigpV2ArlDY2LMkz4QzTS',
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('users');
    }
}
