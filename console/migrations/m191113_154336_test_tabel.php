<?php

use yii\db\Migration;

/**
 * Class m191113_154336_test_tabel
 */
class m191113_154336_test_tabel extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%test_tabel_api}}', [
            'id' => $this->integer()->notNull(),
            'nama' => $this->String(255),
            'alamat' => $this->String(255),
        ], $tableOptions);

        $this->addPrimaryKey('test_tabel_api_pkey', 'test_tabel_api', ['id']);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%test_tabel_api}}');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191113_154336_test_tabel cannot be reverted.\n";

        return false;
    }
    */
}
