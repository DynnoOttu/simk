<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pembayaran".
 *
 * @property int $id_pembayaran
 * @property int $id_registrasi
 * @property int $total_bayar
 * @property int $status_pembayaran
 * @property string $no_rekening
 * @property string $nama_bank
 */
class Pembayaran extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pembayaran';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pasien', 'total_bayar', 'status_pembayaran', 'no_rekening', 'nama_bank', 'status_pembayaran'], 'required'],
            [['id_pasien', 'total_bayar'], 'integer'],
            [['no_rekening', 'nama_bank'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pembayaran' => 'Id Pembayaran',
            'id_pasien' => 'Id Pasien',
            'total_bayar' => 'Total Bayar',
            'status_pembayaran' => 'Status Pembayaran',
            'no_rekening' => 'No Rekening',
            'nama_bank' => 'Nama Bank',
        ];
    }

    public function getPasien()
    {
        return $this->hasOne(Pasien::className(), ['id_pasien' => 'id_pasien']);
    }
}
