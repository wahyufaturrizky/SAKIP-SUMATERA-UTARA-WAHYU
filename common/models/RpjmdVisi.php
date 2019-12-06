<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "rpjmd_visi".
 *
 * @property int $kd_visi
 * @property string $visi
 */
class RpjmdVisi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rpjmd_visi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_visi'], 'required'],
            [['kd_visi'], 'default', 'value' => null],
            [['kd_visi'], 'integer'],
            [['visi'], 'string', 'max' => 255],
            [['kd_visi'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_visi' => 'Kd Visi',
            'visi' => 'Visi',
        ];
    }
}
