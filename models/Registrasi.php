<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "registrasi".
 *
 * @property int $id_registrasi
 * @property int $id_pasien
 * @property int $id_pegawai
 * @property string $waktu_registrasi
 * @property string $status_registrasi
 * @property string $waktu_tutup_registrasi
 */
class Registrasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'registrasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pasien', 'id_pegawai', 'waktu_registrasi', 'status_registrasi'], 'required'],
            [['id_pasien', 'id_pegawai'], 'integer'],
            [['waktu_registrasi', 'waktu_tutup_registrasi'], 'safe'],
            [['status_registrasi'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_registrasi' => 'Id Registrasi',
            'id_pasien' => 'Id Pasien',
            'id_pegawai' => 'Id Pegawai',
            'waktu_registrasi' => 'Waktu Registrasi',
            'status_registrasi' => 'Status Registrasi',
            'waktu_tutup_registrasi' => 'Waktu Tutup Registrasi',
        ];
    }

    public function getPasien()
    {
        return $this->hasOne(Pasien::className(), ['id_pasien' => 'id_pasien']);
    }

    public function getPegawai()
    {
        return $this->hasOne(Pegawai::className(), ['id_pegawai' => 'id_pegawai']);
    }
}
