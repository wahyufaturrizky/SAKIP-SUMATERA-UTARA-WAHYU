<?php

use yii\db\Migration;

/**
 * Class m191114_022646_rpjmd_visi
 */
class m191114_022646_rpjmd_visi extends Migration
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

        $this->createTable('{{%rpjmd_visi}}', [
            'kd_visi' => $this->tinyInteger()->notNull(),
            'visi' => $this->String(255),
        ], $tableOptions);

        $this->addPrimaryKey('rpjmd_visi_pkey', 'rpjmd_visi', ['kd_visi']);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%rpjmd_visi}}');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191114_022646_rpjmd_visi cannot be reverted.\n";

        return false;
    }
    */
}
