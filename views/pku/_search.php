<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\PkuSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pku-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'tgl') ?>

    <?= $form->field($model, 'daerah') ?>

    <?= $form->field($model, 'j_utusan') ?>

    <?php // echo $form->field($model, 'utusan') ?>

    <?php // echo $form->field($model, 'quran') ?>

    <?php // echo $form->field($model, 'arab') ?>

    <?php // echo $form->field($model, 'inggris') ?>

    <?php // echo $form->field($model, 'wawasan') ?>

    <?php // echo $form->field($model, 's2') ?>

    <?php // echo $form->field($model, 'nilai') ?>

    <?php // echo $form->field($model, 'hasil') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
