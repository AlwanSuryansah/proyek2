<?php
namespace app\models;

use yii\db\ActiveRecord;

class tb_pelanggan extends ActiveRecord{

    private $id_pelanggan;
    private $nama_pelanggan;
    private $saldo_pelanggan;

    public function rules(){
        return [
            [['id_pelanggan','nama_pelanggan','saldo_pelanggan'],'required'],

        ];

    }

}