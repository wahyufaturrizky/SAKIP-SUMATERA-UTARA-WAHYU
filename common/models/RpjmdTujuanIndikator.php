<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "rpjmd_tujuan_indikator".
 *
 * @property int $kd_misi
 * @property int $kd_tujuan
 * @property int $kd_sasaran
 * @property int $kd_tujuan_indikator
 * @property string $tujuan_indikator
 */
class RpjmdTujuanIndikator extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rpjmd_tujuan_indikator';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_misi', 'kd_tujuan', 'kd_sasaran', 'kd_tujuan_indikator'], 'required'],
            [['kd_misi', 'kd_tujuan', 'kd_sasaran', 'kd_tujuan_indikator'], 'default', 'value' => null],
            [['kd_misi', 'kd_tujuan', 'kd_sasaran', 'kd_tujuan_indikator'], 'integer'],
            [['tujuan_indikator'], 'string', 'max' => 255],
            [['kd_misi', 'kd_tujuan', 'kd_sasaran', 'kd_tujuan_indikator'], 'unique', 'targetAttribute' => ['kd_misi', 'kd_tujuan', 'kd_sasaran', 'kd_tujuan_indikator']],
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
            'kd_tujuan_indikator' => 'Kd Tujuan Indikator',
            'tujuan_indikator' => 'Tujuan Indikator',
        ];
    }
}
