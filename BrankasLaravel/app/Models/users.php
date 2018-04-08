<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class users extends Model
{
    protected $table = 'users';

    public $timestamps = false;



    protected $fillable = ['name','password'];  //whitelist
//  protected $guarded = []; //blacklist

    public function barangs()
    {
      return $this->hasMany(barangs::class,'id_pemilik_barang','id');
    }
    public function gudangs()
    {
      return $this->hasMany(gudangs::class,'id_penyewa_gudang','id');
    }
}
