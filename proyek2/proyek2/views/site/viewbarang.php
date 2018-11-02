<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'View Barang';
?>
<div class="site-viewbarang">

	<h1>View Barang</h1>

    <div class="body-content">

        <div class="row">
        	<div class="form-group">
        		
        	<ul class="list-group">
        		<li class="list-group-item d-flex justify-content-between align-items-center">
        		<?php echo $tb_barang->id_barang; ?>  
        		</li>
        		<li class="list-group-item d-flex justify-content-between align-items-center">
        		<?php echo $tb_barang->nama_barang; ?>  
        		</li>
        		<li class="list-group-item d-flex justify-content-between align-items-center">
        		<?php echo $tb_barang->harga_barang; ?>  
        		</li>         		
        	</ul>
   					<div class="col-lg-2">
         				<a href=<?php echo yii::$app->homeUrl;?> class='btn btn-primary'> Kembali </a>
         			</div>


        		</div>
          	</div>
        </div>
	</div>
</div>


