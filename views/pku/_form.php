<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Pku $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pku-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl')->input('date') ?>

    <?= $form->field($model, 'daerah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'j_utusan')->dropDownList(
			[1 => 'Lembaga', 2 => 'Pondok', 3 => 'Khusus'], 
            ['prompt'=>'Jenis Utusan']
			); ?>

    <?= $form->field($model, 'utusan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'quran')->dropDownList(
			[1 => 'Rasib', 2 => 'Maqbul', 3 => 'Jayyid', 4 => 'Jayyid Jiddan', 5 => 'Mumtaz'], 
            ['prompt'=>'Nilai Quran']
			); ?>

    <?= $form->field($model, 'arab')->dropDownList(
			[1 => 'Rasib', 2 => 'Maqbul', 3 => 'Jayyid', 4 => 'Jayyid Jiddan', 5 => 'Mumtaz'], 
            ['prompt'=>'Nilai Bahasa Arab']
			); ?>

    <?= $form->field($model, 'inggris')->dropDownList(
			[1 => 'Rasib', 2 => 'Maqbul', 3 => 'Jayyid', 4 => 'Jayyid Jiddan', 5 => 'Mumtaz'], 
            ['prompt'=>'Nilai Bahasa Inggris']
			); ?>

    <?= $form->field($model, 'wawasan')->dropDownList(
			[2 => 'Kurang', 4 => 'Cukup', 6 => 'Baik', 8 => 'Baik Sekali'], 
            ['prompt'=>'Nilai Wawasan']
			); ?>

    <?= $form->field($model, 's2')->dropDownList(
			[4 => 'Ya', 2 => 'Tidak'], 
            ['prompt'=>'Kesediaan Lanjut S2 di UNIDA']
			); ?>

    <?= $form->field($model, 'nilai')->dropDownList(
			[5 => 'A', 4 => 'B', 3 => 'C', 2 => 'D', 1 => 'E'], 
            ['prompt'=>'Nilai Psikotest Pemikiran']
			); ?>

    
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
