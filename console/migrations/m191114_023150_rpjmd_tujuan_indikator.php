<?php

use yii\db\Migration;

/**
 * Class m191114_023150_rpjmd_tujuan_indikator
 */
class m191114_023150_rpjmd_tujuan_indikator extends Migration
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

        $this->createTable('{{%rpjmd_tujuan_indikator}}', [
            'kd_misi' => $this->tinyInteger()->notNull(),
            'kd_tujuan' => $this->tinyInteger()->notNull(),
            'kd_sasaran' => $this->tinyInteger()->notNull(),
            'kd_tujuan_indikator' => $this->tinyInteger()->notNull(),
            'tujuan_indikator' => $this->String(255),
        ], $tableOptions);

        $this->addPrimaryKey('rpjmd_tujuan_indikator_pkey', 'rpjmd_tujuan_indikator', ['kd_misi', 'kd_tujuan', 'kd_sasaran', 'kd_tujuan_indikator']);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%rpjmd_tujuan_indikator}}');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191114_023150_rpjmd_tujuan_indikator cannot be reverted.\n";

        return false;
    }
    */
}
