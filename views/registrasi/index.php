<?php

use app\models\Registrasi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\RegistrasiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Registrasi Pasien';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="registrasi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Registrasi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id_registrasi',
            'pasien.nama_pasien',
            'pegawai.nama_pegawai',
            'waktu_registrasi',
            'status_registrasi',
            //'waktu_tutup_registrasi',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Registrasi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_registrasi' => $model->id_registrasi]);
                }
            ],
        ],
    ]); ?>


</div>