<?php
namespace app\models;

use yii\db\ActiveRecord;

class tb_barang extends ActiveRecord{

    private $id_barang;
    private $nama_barang;
    private $harga_barang;

    public function rules(){
        return [
            [['id_barang','nama_barang','harga_barang'],'required'],

        ];

    }

}