<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Pku $model */

$this->title = 'Create Pku';
$this->params['breadcrumbs'][] = ['label' => 'Pkus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pku-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
