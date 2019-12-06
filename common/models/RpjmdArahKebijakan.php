<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "rpjmd_arah_kebijakan".
 *
 * @property int $kd_misi
 * @property int $kd_tujuan
 * @property int $kd_strategi
 * @property int $kd_sasaran
 * @property int $kd_arah_kebijakan
 * @property string $strategi
 */
class RpjmdArahKebijakan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rpjmd_arah_kebijakan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_misi', 'kd_tujuan', 'kd_strategi', 'kd_sasaran', 'kd_arah_kebijakan'], 'required'],
            [['kd_misi', 'kd_tujuan', 'kd_strategi', 'kd_sasaran', 'kd_arah_kebijakan'], 'default', 'value' => null],
            [['kd_misi', 'kd_tujuan', 'kd_strategi', 'kd_sasaran', 'kd_arah_kebijakan'], 'integer'],
            [['strategi'], 'string', 'max' => 255],
            [['kd_misi', 'kd_tujuan', 'kd_strategi', 'kd_sasaran', 'kd_arah_kebijakan'], 'unique', 'targetAttribute' => ['kd_misi', 'kd_tujuan', 'kd_strategi', 'kd_sasaran', 'kd_arah_kebijakan']],
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
            'kd_strategi' => 'Kd Strategi',
            'kd_sasaran' => 'Kd Sasaran',
            'kd_arah_kebijakan' => 'Kd Arah Kebijakan',
            'strategi' => 'Strategi',
        ];
    }
}
