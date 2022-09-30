<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Pku $model */

$this->title = 'Update Pku: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pkus', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pku-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
