<?php

use yii\db\Migration;

/**
 * Class m191114_022652_rpjmd_misi
 */
class m191114_022652_rpjmd_misi extends Migration
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

        $this->createTable('{{%rpjmd_misi}}', [
            'kd_misi' => $this->tinyInteger()->notNull(),
            'misi' => $this->String(255),
        ], $tableOptions);

        $this->addPrimaryKey('rpjmd_misi_pkey', 'rpjmd_misi', ['kd_misi']);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%rpjmd_misi}}');

        return false;
    }


    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191114_022652_rpjmd_misi cannot be reverted.\n";

        return false;
    }
    */
}
