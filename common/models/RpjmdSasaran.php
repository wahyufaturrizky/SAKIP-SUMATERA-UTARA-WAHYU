<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "rpjmd_sasaran".
 *
 * @property int $kd_misi
 * @property int $kd_tujuan
 * @property int $kd_sasaran
 * @property string $sasaran
 */
class RpjmdSasaran extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rpjmd_sasaran';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_misi', 'kd_tujuan', 'kd_sasaran'], 'required'],
            [['kd_misi', 'kd_tujuan', 'kd_sasaran'], 'default', 'value' => null],
            [['kd_misi', 'kd_tujuan', 'kd_sasaran'], 'integer'],
            [['sasaran'], 'string', 'max' => 255],
            [['kd_misi', 'kd_tujuan', 'kd_sasaran'], 'unique', 'targetAttribute' => ['kd_misi', 'kd_tujuan', 'kd_sasaran']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_misi' => 'Kd Misi',
            'kd_tujuan' => 'Kd Tujuan',
            'kd_sasaran' => 'Kd Sasaran',
            'sasaran' => 'Sasaran',
        ];
    }
}
