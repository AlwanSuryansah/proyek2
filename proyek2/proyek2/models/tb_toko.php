<?php
namespace app\models;

use yii\db\ActiveRecord;

class tb_toko extends ActiveRecord{

    private $id_toko;
    private $nama_toko;
    private $saldo_toko;

    public function rules(){
        return [
            [['id_toko','nama_toko','saldo_toko'],'required'],

        ];

    }

}