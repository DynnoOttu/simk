<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Registrasi $model */

$this->title = $model->id_registrasi;
$this->params['breadcrumbs'][] = ['label' => 'Registrasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="registrasi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_registrasi' => $model->id_registrasi], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_registrasi' => $model->id_registrasi], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_registrasi',
            'pasien.nama_pasien',
            'id_pegawai',
            'waktu_registrasi',
            'status_registrasi',
            'waktu_tutup_registrasi',
        ],
    ]) ?>

</div>