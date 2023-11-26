<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "pegawai".
 *
 * @property int $id_pegawai
 * @property string $nama_pegawai
 * @property string $nip
 * @property string $jabatan
 */
class Pegawai extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pegawai';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_pegawai', 'nip', 'jabatan'], 'required'],
            [['nama_pegawai', 'nip', 'jabatan'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pegawai' => 'Id Pegawai',
            'nama_pegawai' => 'Nama Pegawai',
            'nip' => 'Nip',
            'jabatan' => 'Jabatan',
        ];
    }

    public static function getListPegawai()
    {
        $model = Pegawai::find()->orderBy(['nama_pegawai' => SORT_ASC])->all();
        return ArrayHelper::map($model, 'id_pegawai', 'nama_pegawai');
    }
}
