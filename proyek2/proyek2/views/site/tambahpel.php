<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Tambah Pelanggan';
?>
<div class="site-tambahpel">

	<h1>Tambah Pelanggan</h1>


    <div class="body-content">
        <?php 
        	$form = ActiveForm::begin()?>
        <div class="row">
        	<div class="form-group">
        		<div class="col-lg-6">
         			<?= $form->field($tb_pelanggan, 'id_pelanggan');?>
        		</div>
          	</div>
        </div>
        <div class="row">
        	<div class="form-group">
        		<div class="col-lg-6">
         			<?= $form->field($tb_pelanggan, 'nama_pelanggan');?>
        		</div>
          	</div>
        </div>
        <div class="row">
        	<div class="form-group">
        		<div class="col-lg-6">
         			<?= $form->field($tb_pelanggan, 'saldo_pelanggan');?>
        		</div>
          	</div>
        </div>
        <div class="row">
        	<div class="form-group">
        		<div class="col-lg-6">
        			<div class="col-lg-3">
         			<?= html::submitbutton('Tambah', ['class'=>'btn btn-primary']);?>
         			</div>
   					<div class="col-lg-2">
         				<a href=<?php echo yii::$app->homeUrl;?> class='btn btn-primary'> Kembali </a>
         			</div>


        		</div>
          	</div>
        </div>
        <?php ActiveForm::end() ?>
	</div>
</div>


