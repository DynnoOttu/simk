<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "pasien".
 *
 * @property int $id_pasien
 * @property string $nama_pasien
 * @property string $nik
 * @property int $jenis_kelamin
 * @property string $tanggal_lahir
 */
class Pasien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pasien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_pasien', 'nik', 'jenis_kelamin', 'tanggal_lahir'], 'required'],
            [['tanggal_lahir'], 'safe'],
            [['nama_pasien', 'jenis_kelamin'], 'string', 'max' => 150],
            [['nik'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pasien' => 'Id Pasien',
            'nama_pasien' => 'Nama Pasien',
            'nik' => 'NIK',
            'jenis_kelamin' => 'Jenis Kelamin',
            'tanggal_lahir' => 'Tanggal Lahir',
        ];
    }

    public static function getListPasien()
    {
        $model = Pasien::find()->orderBy(['nama_pasien' => SORT_ASC])->all();
        return ArrayHelper::map($model, 'id_pasien', 'nama_pasien');
    }
}
