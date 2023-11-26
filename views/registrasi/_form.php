<?php

use app\models\Pasien;
use app\models\Pegawai;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Registrasi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="registrasi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_pasien')->dropDownList(Pasien::getListPasien(), ['prompt' => 'Pilih Pasien..'])->label('Pasien') ?>

    <?= $form->field($model, 'id_pegawai')->dropDownList(Pegawai::getListPegawai(), ['prompt' => 'Pilih Pegawai..'])->label('Pegawai') ?>

    <?= $form->field($model, 'waktu_registrasi')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>