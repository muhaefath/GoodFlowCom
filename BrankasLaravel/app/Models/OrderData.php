<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderData extends Model
{
    protected $table = 'orderdata';
    public $timestamps = false;



    protected $fillable = ['lokasigudang','kategoribisnis	','tanggalmasuk','paket','id_pemesan_order','id_profile_gudang'];  //whitelist
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
