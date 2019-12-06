<?php

use yii\db\Migration;

/**
 * Class m191114_023314_rpjmd_ta_kegiatan
 */
class m191114_023314_rpjmd_ta_kegiatan extends Migration
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

        $this->createTable('{{%rpjmd_ta_kegiatan}}', [
            'no_program' => $this->integer()->notNull(),
            'kd_urusan' => $this->integer()->notNull(),
            'kd_bidang' => $this->integer()->notNull(),
            'kd_unit' => $this->integer()->notNull(),
            'kd_sub_unit' => $this->integer()->notNull(),
            'kd_program' => $this->integer()->notNull(),
            'kd_kegiatan' => $this->integer()->notNull(),
            'kegiatan' => $this->String(255),
        ], $tableOptions);

        $this->addPrimaryKey('rpjmd_ta_kegiatan_pkey', 'rpjmd_ta_kegiatan', ['kd_urusan', 'kd_bidang', 'kd_unit', 'kd_sub_unit', 'kd_program', 'kd_kegiatan']);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%rpjmd_ta_kegiatan}}');

        return false;
    }


    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191114_023314_rpjmd_ta_kegiatan cannot be reverted.\n";

        return false;
    }
    */
}
