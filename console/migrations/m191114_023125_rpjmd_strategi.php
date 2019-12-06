<?php

use yii\db\Migration;

/**
 * Class m191114_023125_rpjmd_strategi
 */
class m191114_023125_rpjmd_strategi extends Migration
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

        $this->createTable('{{%rpjmd_strategi}}', [
            'kd_misi' => $this->tinyInteger()->notNull(),
            'kd_tujuan' => $this->tinyInteger()->notNull(),
            'kd_strategi' => $this->tinyInteger()->notNull(),
            'kd_sasaran' => $this->tinyInteger()->notNull(),
            'strategi' => $this->String(255),
        ], $tableOptions);

        $this->addPrimaryKey('rpjmd_strategi_pkey', 'rpjmd_strategi', ['kd_misi', 'kd_tujuan', 'kd_strategi', 'kd_sasaran']);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%rpjmd_strategi}}');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191114_023125_rpjmd_strategi cannot be reverted.\n";

        return false;
    }
    */
}
