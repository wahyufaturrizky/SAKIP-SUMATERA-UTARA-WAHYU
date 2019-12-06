<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "rpjmd_ta_program".
 *
 * @property int $no_program
 * @property int $kd_urusan
 * @property int $kd_bidang
 * @property int $kd_unit
 * @property int $kd_sub_unit
 * @property int $kd_program
 * @property string $program
 */
class RpjmdTaProgram extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rpjmd_ta_program';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_program', 'kd_urusan', 'kd_bidang', 'kd_unit', 'kd_sub_unit', 'kd_program'], 'required'],
            [['no_program', 'kd_urusan', 'kd_bidang', 'kd_unit', 'kd_sub_unit', 'kd_program'], 'default', 'value' => null],
            [['no_program', 'kd_urusan', 'kd_bidang', 'kd_unit', 'kd_sub_unit', 'kd_program'], 'integer'],
            [['program'], 'string', 'max' => 255],
            [['no_program'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_program' => 'No Program',
            'kd_urusan' => 'Kd Urusan',
            'kd_bidang' => 'Kd Bidang',
            'kd_unit' => 'Kd Unit',
            'kd_sub_unit' => 'Kd Sub Unit',
            'kd_program' => 'Kd Program',
            'program' => 'Program',
        ];
    }
}
