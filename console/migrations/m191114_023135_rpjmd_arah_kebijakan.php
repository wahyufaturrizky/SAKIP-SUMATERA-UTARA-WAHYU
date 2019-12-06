<?php

use yii\db\Migration;

/**
 * Class m191114_023135_rpjmd_arah_kebijakan
 */
class m191114_023135_rpjmd_arah_kebijakan extends Migration
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

        $this->createTable('{{%rpjmd_arah_kebijakan}}', [
            'kd_misi' => $this->tinyInteger()->notNull(),
            'kd_tujuan' => $this->tinyInteger()->notNull(),
            'kd_strategi' => $this->tinyInteger()->notNull(),
            'kd_sasaran' => $this->tinyInteger()->notNull(),
            'kd_arah_kebijakan' => $this->tinyInteger()->notNull(),
            'strategi' => $this->String(255),
        ], $tableOptions);

        $this->addPrimaryKey('rpjmd_arah_kebijakan_pkey', 'rpjmd_arah_kebijakan', ['kd_misi', 'kd_tujuan', 'kd_strategi', 'kd_sasaran', 'kd_arah_kebijakan']);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%rpjmd_arah_kebijakan}}');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191114_023135_rpjmd_arah_kebijakan cannot be reverted.\n";

        return false;
    }
    */
}
