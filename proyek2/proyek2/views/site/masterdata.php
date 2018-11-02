<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Master Data';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-masterdata">
    <h1><?= Html::encode($this->title) ?></h1>

       <samp style="margin-bottom: 30px;"><?= html::a('Data Pelanggan',['/site/pelanggan'],['class' => 'btn btn-primary'])  ?> </samp>    

       <samp style="margin-bottom: 80px;"><?= html::a('Data Toko',['/site/toko'],['class' => 'btn btn-primary'])  ?> </samp>    

       <samp style="margin-bottom: 30px;"><?= html::a('Data Barang',['/site/barang'],['class' => 'btn btn-primary'])  ?> </samp>   

       <samp style="margin-bottom: 30px;"><?= html::a('Data Transaksi',['/site/barang'],['class' => 'btn btn-primary'])  ?> </samp>    
