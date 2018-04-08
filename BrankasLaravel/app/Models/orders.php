<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class orders extends Model
{
    protected $table = 'orders';
    public $timestamps = false;



    protected $fillable = ['lokasigudang','kategoribisnis	','tanggalmasuk','paket','id_pemilik_order'];  //whitelist
//  protected $guarded = []; //blacklist
/*
    public function barangs()
    {
      return $this->hasMany('app\models\InventoryData','id_lokasi_gudang','id');
    }*/
    public function user()
    {
      return $this->belongTo('app\models\UserData','id_pemilik_barang','id');
    }
}
