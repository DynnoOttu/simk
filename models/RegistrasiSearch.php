<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Registrasi;

/**
 * RegistrasiSearch represents the model behind the search form of `app\models\Registrasi`.
 */
class RegistrasiSearch extends Registrasi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_registrasi', 'id_pasien', 'id_pegawai'], 'integer'],
            [['waktu_registrasi', 'status_registrasi', 'waktu_tutup_registrasi'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Registrasi::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_registrasi' => $this->id_registrasi,
            'id_pasien' => $this->id_pasien,
            'id_pegawai' => $this->id_pegawai,
            'waktu_registrasi' => $this->waktu_registrasi,
            'waktu_tutup_registrasi' => $this->waktu_tutup_registrasi,
        ]);

        $query->andFilterWhere(['like', 'status_registrasi', $this->status_registrasi]);

        return $dataProvider;
    }
}
