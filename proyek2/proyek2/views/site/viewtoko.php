<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'View Toko';
?>
<div class="site-viewtoko">

	<h1>View Pelanggan</h1>

    <div class="body-content">

        <div class="row">
        	<div class="form-group">
        		
        	<ul class="list-group">
        		<li class="list-group-item d-flex justify-content-between align-items-center">
        		<?php echo $tb_toko->id_toko; ?>  
        		</li>
        		<li class="list-group-item d-flex justify-content-between align-items-center">
        		<?php echo $tb_toko->nama_toko; ?>  
        		</li>
        		<li class="list-group-item d-flex justify-content-between align-items-center">
        		<?php echo $tb_toko->saldo_toko; ?>  
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


