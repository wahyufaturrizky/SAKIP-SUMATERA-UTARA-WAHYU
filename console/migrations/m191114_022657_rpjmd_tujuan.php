<?php

use yii\db\Migration;

/**
 * Class m191114_022657_rpjmd_tujuan
 */
class m191114_022657_rpjmd_tujuan extends Migration
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

        $this->createTable('{{%rpjmd_tujuan}}', [
            'kd_misi' => $this->tinyInteger()->notNull(),
            'kd_tujuan' => $this->tinyInteger()->notNull(),
            'tujuan' => $this->String(255),
        ], $tableOptions);

        $this->addPrimaryKey('rpjmd_tujuan_pkey', 'rpjmd_tujuan', ['kd_misi', 'kd_tujuan']);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%rpjmd_tujuan}}');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191114_022657_rpjmd_tujuan cannot be reverted.\n";

        return false;
    }
    */
}
