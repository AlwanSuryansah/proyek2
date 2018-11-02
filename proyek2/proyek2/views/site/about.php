<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php if(yii::$app->session->hasFlash('message')): ?>
    	<div class="alert alert-dismissible alert-success">
    		<button type="button" class="close" data-dismiss="alert">&times;</button>
    		<?php echo yii::$app->session->getFlash('message');?>    		
    	</div>
    <?php endif; ?>

    <div class="row">
    	<samp style="margin-bottom: 30px;"><?= html::a('Tambah',['/site/tambahpel'],['class' => 'btn btn-primary'])  ?> </samp>    	
    </div>

    <div class="body-content">
    	<div class="row">
    		<table class="table table-hover">
    			<thead>
    				<tr>
    					<th scope="col">
    						Id Pelanggan
    					</th>
    					<th scope="col">
    						Nama Pelanggan
    					</th>
    					<th scope="col">
    						Saldo Pelanggan
    					</th>
    					<th scope="col">
    						Action
    					</th>
    				</tr>
    			</thead>
    			<tbody>
    			  		<?php if(count($tb_pelanggan) > 0 ): ?>
    			  			<?php foreach($tb_pelanggan as $tb_pelanggann): ?>
      				<tr class="table-active">
    					<th scope="row">
    					<?php echo $tb_pelanggann->id_pelanggan; ?>
    					</th>
    					<td>
    						<?php echo $tb_pelanggann->nama_pelanggan; ?>
    					</td>
    					<td>
    						<?php echo $tb_pelanggann->saldo_pelanggan; ?>
    					</td>
    					<td>
    						<samp><?=html::a('View' ,['view', 'id_pelanggan'=>$tb_pelanggann->id_pelanggan], ['class'=>'label label-primary'])?></samp>
    						<samp><?=html::a('Update' ,['update', 'id_pelanggan'=>$tb_pelanggann->id_pelanggan], ['class'=>'label label-default'])?></samp>
    						<samp><?=html::a('Delete' ,['delete', 'id_pelanggan'=>$tb_pelanggann->id_pelanggan], ['class'=>'label label-danger'])?></samp>
    					</td>
    				</tr>
    						<?php endforeach; ?>
    					  		<?php else: ?>
    					  				<tr>
    					  					<td>
    					  						no Records found!!
    					  					</td>
    					  				</tr>
    					  		<?php endif; ?>

    			</tbody>

    			

    	
    		

    	</table>
    	

    </div>
</div>
