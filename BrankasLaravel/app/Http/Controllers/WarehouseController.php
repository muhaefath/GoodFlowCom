<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


use App\Models\users; // data user
use App\Models\OrderData; // data order
use App\Models\barangs; // data barang
use App\Models\Tampilan3Akun;
use App\Models\gudangs;
use App\Models\warehousemans;
use Auth;
class WarehouseController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth:warehouseman');
  }


  public function TampilanDepanWarehouse()
  {
      $userid = auth('warehouseman')->user()->id;
      $statusnya = warehousemans::where('id','=',$userid)->first();
      $id = 12;
      $gudang = barangs::where('id_Lokasi_Gudang','=',1)->get();
      $statusnya2  = $statusnya->gudangs;


    //  dd($barangs->where('id_Lokasi_Gudang','=',3));


      return view('Asisten/HalamanDepanWarehouse',['status'=>$statusnya,'gudangs'=>$gudang,'status2'=>$statusnya2]);

  }


  public function daftargudang()
  {

      return view('Asisten/DaftarGudang');

  }

  public function ProfileGudang($id)
  {
      $id = gudangs::where('id','=',$id)->first();

      return view('Asisten/HomeGudangWarehouse',['status'=>$id]);

  }

  public function StoreGudang(Request $request)
  {
      $daftar = gudangs::all();

      $daftar = new gudangs;
      $daftar->lokasigudang = $request->LokasiGudang;
      $daftar->id_pemilik_gudang = auth('warehouseman')->user()->id;

      $daftar -> save();
  //  dd($daftar);
      return redirect('/bussinessast/Warehouse/inventory');

  }



  public function SuksesRegis(Request $request)
  {

        $daftar = new users;
        $daftar -> name = $request->name;
        $daftar -> role = "2";
        $daftar -> email = $request->email;
        $daftar -> password = $request->password;


        return view('Asisten/HalamanDepan2');

    //  return  redirect('/bussinessast');
  }


}
