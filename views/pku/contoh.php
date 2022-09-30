<?php

use app\models\Pku;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\PkuSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Contoh';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pku-index">

    <p>
        
        <?php
        echo '<pre>';print_r($data->nama);exit; 
        foreach ($data as $data) {
            // $nilai_akhir = $data->nilai / 3 ;
            // echo `Hasil = `, $nilai_akhir;

        }
        ?>
    </p>


</div>