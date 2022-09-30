<?php

use app\models\Pku;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\PkuSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Pembobotan Penilaian Kelulusan Calon Peserta PKU';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pku-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pku', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'nama',
            //'tgl',
            'daerah',
            //'j_utusan',
            'utusan',
            //'quran',
            //'arab',
            //'inggris',
            //'wawasan',
            //'s2',
            //'nilai',
            'hasil',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Pku $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
