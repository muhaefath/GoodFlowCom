<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\users; // data user
use App\Models\orders;
use App\Models\gudangs;
use App\Models\barangs; // data barang
use App\Models\OrderData; // data order
use App\Models\Tampilan3Akun;
use App\Models\warehousemans;
use Auth;
class Bisnisman extends Controller
{
  public function TampilanDepan2()
  {

        return view('Asisten/HomeAsisten');

  }

  public function TampilanDepan()
  {
        $statusnya = users::all();

        return view('bisnis/HalamanDepan',['status'=>$statusnya]);



  //  $daftar = Tampilan3Akun::all();
    //dd($daftar);
      //return view('daftar/Login',['tampilan'=>$daftar]);
  }

  public function order()
  {
        $statusnya = users::all();

        return view('bisnis/order3',['status'=>$statusnya]);



  //  $daftar = Tampilan3Akun::all();
    //dd($daftar);
      //return view('daftar/Login',['tampilan'=>$daftar]);
  }

  public function SuksesOrder(Request $request)
  {
        $daftar = orders::all();
        //INSERT BIASA
          $daftar = new orders;
          $daftar -> lokasigudang = $request->LokasiGudang;
          $daftar -> kategoribisnis = $request->KategoriBisnis;
          $daftar -> tanggalmasuk = $request->TanggalMasuk;
          $daftar -> paket = $request->Paket;
           $daftar -> save();
           return redirect('/bussinessman/order/pilihgudang');

  }

  public function orderRoom()
  {

        $gudangs = gudangs::all();

        //$gudangs->first()->gudangs;
        //dd($gudangs);

        return view('bisnis/orderRoom',['status'=>$gudangs]);

  }

  public function PageGudang($id)
  {
        $id = gudangs::where('id','=',$id)->first();
        $gudangs = gudangs::all()->first();

        return view('bisnis/HomeGudang',['status'=>$id,'gudang'=>$gudangs]);


  }

  public function ProfilePemilikGudang($id)
  {
        $id = warehousemans::where('id','=',$id)->first();
      //  $gudangs = gudangs::all()->first();

        return view('bisnis/ProfilePemilikGudang',['status'=>$id]);


  }

  public function PesanBarang($id)
  {
        //$id = warehousemans::where('id','=',$id)->first();
      //  $gudangs = gudangs::all()->first();

        //dd($id);
        return view('bisnis/PesanBarang',['status'=>$id]);


  }

  public function PesanBarangSukses(Request $request,$id)
  {
        //$id = warehousemans::where('id','=',$id)->first();
      //  $gudangs = gudangs::all()->first();
        //dd($id);
        $gudang = gudangs::where('id','=',$id)->first();

        $daftar = barangs::all();
        $daftar = new barangs;
        $daftar -> nama = $request->NamaBarang;
        $daftar -> deskripsi = $request->Deskripsi;
        $daftar -> quantity = $request->qty;
        $daftar -> gudang = $gudang->lokasigudang;
        $daftar -> id_pemilik_barang = auth()->user()->id;

         $daftar -> save();

        return view('bisnis/PesanBarangSukses');
  }

  public function SuksesStore1(Request $request)
  {

        $daftar = OrderData::all();
        $daftar2= barangs::all();
        //INSERT BIASA

          $daftar = new OrderData;
          $daftar -> lokasigudang = $request->LokasiGudang;
          $daftar -> kategoribisnis = $request->KategoriBisnis;
          $daftar -> tanggalmasuk = $request->TanggalMasuk;
          $daftar -> paket = $request->Paket;
          $daftar -> id_pemesan_order= auth()->user()->id;

           $daftar -> save();

           $daftar2 = new barangs;
           $daftar2 -> nama = $request->NamaBarang;
           $daftar2 -> deskripsi = $request->Deskripsi;
           $daftar2 -> quantity = $request->qty;
           $daftar2 -> gudang = $request->LokasiGudang;
           $daftar2 -> id_pemilik_barang = auth()->user()->id;
           $daftar2 -> save();

           return redirect('/bussinessman');


  }



  public function SuksesStore2(Request $request)
  {

        $daftar2= barangs::all();
        //INSERT BIASA

           $daftar2 = new barangs;
           $daftar2 -> nama = $request->NamaBarang;
           $daftar2 -> deskripsi = $request->Deskripsi;
           $daftar2 -> quantity = $request->qty;
           $daftar2 -> gudang = $request->LokasiGudang;
           $daftar2 -> id_pemilik_barang = auth()->user()->id;
           $daftar2 -> save();

           return redirect('/bussinessman/inventory/databarang');

  }



  public function inventory()
  {
        ///$iduser = Auth::user();
      $userid = auth()->user()->id;

    $users = users::where('id','=',$userid)->first();  // cara penulisan model

    //dd($gudangs);
    //$gudangs = barangs::all()->distinct()->first();

    //$gudangs = DB::table('barangs')->where('id_pemilik_barang','=',$userid)->select('gudang')->distinct()->get();
    $gudangs = DB::table('barangs')->where('id_pemilik_barang','=',$userid)->get();
      $users2 = users::where('id','=',$userid)->first();
    //  dd($gudangs);

    //  dd($users2->select('id'));
    //dd($users);

      return view('bisnis/inventory',['status'=>$users,'gudang'=>$gudangs]);

  }

  public function inventoryDataGudang()
  {
        ///$iduser = Auth::user();
      $userid = auth()->user()->id;

    $users = users::where('id','=',$userid)->first();  // cara penulisan model


      return view('bisnis/inventoryDataGudang',['status'=>$users]);

  }

  public function inventoryTambah()
  {
        ///$iduser = Auth::user();
      $userid = auth()->user()->id;


    $gudangs = DB::table('barangs')->where('id_pemilik_barang','=',$userid)->get();


      return view('bisnis/inventoryTambah',['gudang'=>$gudangs]);

  }



public function inventoryStatus()
{
      ///$iduser = Auth::user();
    $userid = auth()->user()->id;

  $users = users::where('id','=',$userid)->first();  // cara penulisan model


  $gudangs = DB::table('barangs')->where('id_pemilik_barang','=',$userid)->get();
    $users2 = users::where('id','=',$userid)->first();

    return view('bisnis/inventoryStatus',['status'=>$users,'gudang'=>$gudangs]);

}

  public function TambahBarang()
  {
    $userid = auth()->user()->id;
      $users = users::where('id','=',$userid)->first();

      return view('bisnis/TambahBarangGudangLama',['status'=>$users]);
  }

  public function history()
  {
      //  $status = InventoryData::all();

        return view('bisnis/history');



  //  $daftar = Tampilan3Akun::all();
    //dd($daftar);
      //return view('daftar/Login',['tampilan'=>$daftar]);
  }
  public function statistik()
  {
    //    $statusnya = InventoryData::all();

        return view('bisnis/statistik');



  //  $daftar = Tampilan3Akun::all();
    //dd($daftar);
      //return view('daftar/Login',['tampilan'=>$daftar]);
  }


}
