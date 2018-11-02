<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Barcode';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-barcode">
    <h1><?= Html::encode($this->title) ?></h1>

<?php
/* @var $this yii\web\View */
use Da\QrCode\QrCode;
$qrCode = (new QrCode('This is my text'))
    ->setSize(250)
    ->setMargin(5)
    ->useForegroundColor(51, 153, 255);

// now we can display the qrcode in many ways
// saving the result to a file:

$qrCode->writeFile(__DIR__ . '/code.png'); // writer defaults to PNG when none is specified

// display directly to the browser 
header('Content-Type: '.$qrCode->getContentType());
echo $qrCode->writeString();
//$this->title = 'My Yii Application';
?> 

<?php 
// or even as data:uri url
echo '<img src"' . $qrCode->writeDataUri() . '">';
?>

</div>




