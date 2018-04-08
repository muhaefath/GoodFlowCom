<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class barangs extends Model
{
    protected $table = 'barangs';

    public $timestamps = false;



    protected $fillable = ['nama','deskripsi','gudang','quantity','id_pemilik_barang','status'];  //whitelist

//  protected $guarded = []; //blacklist
    public function users()
    {
      return $this->belongsTo(users::class,'id');
    //  return $this->hasMany(barangs::class,'id_pemilik_barang','id');

    }
    public function gudangs()
    {
      return $this->belongsTo(gudangs::class,'id_Lokasi_Gudang','id');
      //return $this->belongsTo('App\Models\OrderData');
      //return $this->hasMany(OrderData::class,'id_pemilik_barang','id');

    }

}
