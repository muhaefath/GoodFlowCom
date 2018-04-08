<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class gudangs extends Model
{
    protected $table = 'datagudangs';

    public $timestamps = false;



    protected $fillable = ['lokasigudang','id_pemilik_gudang'];  //whitelist

//  protected $guarded = []; //blacklist
    public function warehousemans()
    {
      return $this->belongsTo(warehousemans::class,'id_pemilik_gudang','id');
    //  return $this->hasMany(barangs::class,'id_pemilik_barang','id');

    }
    public function barangs()
    {
      return $this->hasMany(barangs::class,'id_Lokasi_Gudang','id');
      //return $this->belongsTo('App\Models\OrderData');
      //return $this->hasMany(OrderData::class,'id_pemilik_barang','id');

    }

}
