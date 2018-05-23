<?php

use yii\db\Migration;
use yii\db\mysql\Schema;

/**
 * Class m180523_052700_translations
 */
class m180523_052700_translations extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%translations}}', [
            'id' => Schema::TYPE_PK,
            'code' => Schema::TYPE_STRING . '(255) NOT NULL',
            'name_ru' => Schema::TYPE_STRING . '(255) NOT NULL',
            'name_uz' => Schema::TYPE_STRING . '(255) NOT NULL',
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%translations}}');
    }
}
