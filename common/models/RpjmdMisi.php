<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "rpjmd_misi".
 *
 * @property int $kd_misi
 * @property string $misi
 */
class RpjmdMisi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rpjmd_misi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_misi'], 'required'],
            [['kd_misi'], 'default', 'value' => null],
            [['kd_misi'], 'integer'],
            [['misi'], 'string', 'max' => 255],
            [['kd_misi'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_misi' => 'Kd Misi',
            'misi' => 'Misi',
        ];
    }
}
