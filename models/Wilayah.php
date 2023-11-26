<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "wilayah".
 *
 * @property int $id_wilayah
 * @property string $nama_wilayah
 * @property string $keterangan
 */
class Wilayah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'wilayah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_wilayah', 'keterangan'], 'required'],
            [['keterangan'], 'string'],
            [['nama_wilayah'], 'string', 'max' => 150],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_wilayah' => 'Id Wilayah',
            'nama_wilayah' => 'Nama Wilayah',
            'keterangan' => 'Keterangan',
        ];
    }
}
