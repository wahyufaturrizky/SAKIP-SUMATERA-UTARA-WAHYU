<?php

use yii\db\Migration;

/**
 * Class m191114_023300_rpjmd_ta_program
 */
class m191114_023300_rpjmd_ta_program extends Migration
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

        $this->createTable('{{%rpjmd_ta_program}}', [
            'no_program' => $this->integer()->notNull(),
            'kd_urusan' => $this->integer()->notNull(),
            'kd_bidang' => $this->integer()->notNull(),
            'kd_unit' => $this->integer()->notNull(),
            'kd_sub_unit' => $this->integer()->notNull(),
            'kd_program' => $this->integer()->notNull(),
            'program' => $this->String(255),
        ], $tableOptions);

        $this->addPrimaryKey('rpjmd_ta_program_pkey', 'rpjmd_ta_program', ['no_program']);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%rpjmd_ta_program}}');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191114_023300_rpjmd_ta_program cannot be reverted.\n";

        return false;
    }
    */
}
