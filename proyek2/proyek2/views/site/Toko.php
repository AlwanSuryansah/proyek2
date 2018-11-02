<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Form Toko';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-toko">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php if(yii::$app->session->hasFlash('message')): ?>
        <div class="alert alert-dismissible alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?php echo yii::$app->session->getFlash('message');?>           
        </div>
    <?php endif; ?>

    <div class="row">
        <samp style="margin-bottom: 30px;"><?= html::a('Tambah',['/site/tambahtoko'],['class' => 'btn btn-primary'])  ?> </samp> 

        <a href=<?php echo yii::$app->homeUrl;?> class='btn btn-primary'> Kembali </a>      
    </div>

    <div class="body-content">
        <div class="row">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">
                            Id Toko
                        </th>
                        <th scope="col">
                            Nama Toko
                        </th>
                        <th scope="col">
                            Saldo Toko
                        </th>
                        <th scope="col">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                        <?php if(count($tb_toko) > 0 ): ?>
                            <?php foreach($tb_toko as $tb_toko): ?>
                    <tr class="table-active">
                        <th scope="row">
                        <?php echo $tb_toko->id_toko; ?>
                        </th>
                        <td>
                            <?php echo $tb_toko->nama_toko; ?>
                        </td>
                        <td>
                            <?php echo $tb_toko->saldo_toko; ?>
                        </td>
                        <td>
                        <samp><?=html::a('View' ,['viewtoko', 'id_toko'=>$tb_toko->id_toko], ['class'=>'label label-primary'])?></samp>
                        <samp><?=html::a('Update' ,['updatetoko', 'id_toko'=>$tb_toko->id_toko], ['class'=>'label label-default'])?></samp>
                        <samp><?=html::a('Delete' ,['deletetoko', 'id_toko'=>$tb_toko->id_toko], ['class'=>'label label-danger'])?></samp>
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
