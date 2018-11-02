<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Barang';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-barang">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php if(yii::$app->session->hasFlash('message')): ?>
        <div class="alert alert-dismissible alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?php echo yii::$app->session->getFlash('message');?>           
        </div>
    <?php endif; ?>

    <div class="row">
        <samp style="margin-bottom: 30px;"><?= html::a('Tambah',['/site/tambahpel'],['class' => 'btn btn-primary'])  ?> </samp>

        <a href=<?php echo yii::$app->homeUrl;?> class='btn btn-primary'> Kembali </a>       
    </div>

    <div class="body-content">
        <div class="row">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">
                            Id Barang
                        </th>
                        <th scope="col">
                            Nama Barang
                        </th>
                        <th scope="col">
                            Harga Barang
                        </th>
                        <th scope="col">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                        <?php if(count($tb_barang) > 0 ): ?>
                            <?php foreach($tb_barang as $tb_barang): ?>
                    <tr class="table-active">
                        <th scope="row">
                        <?php echo $tb_barang->id_barang; ?>
                        </th>
                        <td>
                            <?php echo $tb_barang->nama_barang; ?>
                        </td>
                        <td>
                            <?php echo $tb_barang->harga_barang; ?>
                        </td>
                        <td>
                   <samp><?=html::a('View' ,['viewbarang', 'id_barang'=>$tb_barang->id_barang], ['class'=>'label label-primary'])?></samp>
                   <samp><?=html::a('Update' ,['updatebarang', 'id_barang'=>$tb_barang->id_barang], ['class'=>'label label-default'])?></samp>
                   <samp><?=html::a('Delete' ,['deletebarang', 'id_barang'=>$tb_barang->id_barang], ['class'=>'label label-danger'])?></samp>
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
