<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "rpjmd_ref_program".
 *
 * @property int $no_program
 * @property int $kd_urusan
 * @property int $kd_bidang
 * @property int $kd_program
 * @property string $program
 */
class RpjmdRefProgram extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rpjmd_ref_program';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_program', 'kd_urusan', 'kd_bidang', 'kd_program'], 'required'],
            [['no_program', 'kd_urusan', 'kd_bidang', 'kd_program'], 'default', 'value' => null],
            [['no_program', 'kd_urusan', 'kd_bidang', 'kd_program'], 'integer'],
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
            'kd_program' => 'Kd Program',
            'program' => 'Program',
        ];
    }
}
