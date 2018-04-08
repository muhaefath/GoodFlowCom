<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class warehousemans extends Model
{
    protected $table = 'warehousemens';

    public $timestamps = false;



    protected $fillable = ['name','email'];  //whitelist
//  protected $guarded = []; //blacklist


    public function gudangs()
    {
      return $this->hasMany(gudangs::class,'id_pemilik_gudang','id');
    }

    public function barangs()
    {
      return $this->hasMany(barangs::class,'id_pemilik_gudang','id');
    }

}
