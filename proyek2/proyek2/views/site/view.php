<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'View Pelanggan';
?>
<div class="site-view">

	<h1>View Pelanggan</h1>

    <div class="body-content">

        <div class="row">
        	<div class="form-group">
        		
        	<ul class="list-group">
        		<li class="list-group-item d-flex justify-content-between align-items-center">
        		<?php echo $tb_pelanggan->id_pelanggan; ?>  
        		</li>
        		<li class="list-group-item d-flex justify-content-between align-items-center">
        		<?php echo $tb_pelanggan->nama_pelanggan; ?>  
        		</li>
        		<li class="list-group-item d-flex justify-content-between align-items-center">
        		<?php echo $tb_pelanggan->saldo_pelanggan; ?>  
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


