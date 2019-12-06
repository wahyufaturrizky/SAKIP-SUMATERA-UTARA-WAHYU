<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "rpjmd_sasaran_indikator_target".
 *
 * @property int $kd_misi
 * @property int $kd_tujuan
 * @property int $kd_sasaran
 * @property int $kd_sasaran_indikator
 * @property int $tahun
 * @property string $tujuan_indikator
 */
class RpjmdSasaranIndikatorTarget extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rpjmd_sasaran_indikator_target';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_misi', 'kd_tujuan', 'kd_sasaran', 'kd_sasaran_indikator', 'tahun'], 'required'],
            [['kd_misi', 'kd_tujuan', 'kd_sasaran', 'kd_sasaran_indikator', 'tahun'], 'default', 'value' => null],
            [['kd_misi', 'kd_tujuan', 'kd_sasaran', 'kd_sasaran_indikator', 'tahun'], 'integer'],
            [['tujuan_indikator'], 'string', 'max' => 255],
            [['kd_misi', 'kd_tujuan', 'kd_sasaran', 'kd_sasaran_indikator'], 'unique', 'targetAttribute' => ['kd_misi', 'kd_tujuan', 'kd_sasaran', 'kd_sasaran_indikator']],
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
            'kd_sasaran_indikator' => 'Kd Sasaran Indikator',
            'tahun' => 'Tahun',
            'tujuan_indikator' => 'Tujuan Indikator',
        ];
    }
}
