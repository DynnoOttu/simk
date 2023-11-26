<?php

use app\models\Pasien;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Pembayaran $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pembayaran-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'id_pasien')->dropDownList(Pasien::getListPasien(), ['prompt' => 'Pilih Pasien..'])->label('Pasien') ?>

    <?= $form->field($model, 'total_bayar')->textInput() ?>

    <?= $form->field($model, 'status_pembayaran')->textInput() ?>

    <?= $form->field($model, 'no_rekening')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_bank')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>