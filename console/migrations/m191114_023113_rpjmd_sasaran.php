<?php

use yii\db\Migration;

/**
 * Class m191114_023113_rpjmd_sasaran
 */
class m191114_023113_rpjmd_sasaran extends Migration
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

        $this->createTable('{{%rpjmd_sasaran}}', [
            'kd_misi' => $this->tinyInteger()->notNull(),
            'kd_tujuan' => $this->tinyInteger()->notNull(),
            'kd_sasaran' => $this->tinyInteger()->notNull(),
            'sasaran' => $this->String(255),
        ], $tableOptions);

        $this->addPrimaryKey('rpjmd_sasaran_pkey', 'rpjmd_sasaran', ['kd_misi', 'kd_tujuan', 'kd_sasaran']);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%rpjmd_sasaran}}');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191114_023113_rpjmd_sasaran cannot be reverted.\n";

        return false;
    }
    */
}
