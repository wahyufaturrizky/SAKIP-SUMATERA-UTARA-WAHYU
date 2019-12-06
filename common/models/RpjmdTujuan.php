<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "rpjmd_tujuan".
 *
 * @property int $kd_misi
 * @property int $kd_tujuan
 * @property string $tujuan
 */
class RpjmdTujuan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rpjmd_tujuan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_misi', 'kd_tujuan'], 'required'],
            [['kd_misi', 'kd_tujuan'], 'default', 'value' => null],
            [['kd_misi', 'kd_tujuan'], 'integer'],
            [['tujuan'], 'string', 'max' => 255],
            [['kd_misi', 'kd_tujuan'], 'unique', 'targetAttribute' => ['kd_misi', 'kd_tujuan']],
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
            'tujuan' => 'Tujuan',
        ];
    }
}
