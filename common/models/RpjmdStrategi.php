<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "rpjmd_strategi".
 *
 * @property int $kd_misi
 * @property int $kd_tujuan
 * @property int $kd_strategi
 * @property int $kd_sasaran
 * @property string $strategi
 */
class RpjmdStrategi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rpjmd_strategi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_misi', 'kd_tujuan', 'kd_strategi', 'kd_sasaran'], 'required'],
            [['kd_misi', 'kd_tujuan', 'kd_strategi', 'kd_sasaran'], 'default', 'value' => null],
            [['kd_misi', 'kd_tujuan', 'kd_strategi', 'kd_sasaran'], 'integer'],
            [['strategi'], 'string', 'max' => 255],
            [['kd_misi', 'kd_tujuan', 'kd_strategi', 'kd_sasaran'], 'unique', 'targetAttribute' => ['kd_misi', 'kd_tujuan', 'kd_strategi', 'kd_sasaran']],
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
            'strategi' => 'Strategi',
        ];
    }
}
