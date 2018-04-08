<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


use App\Models\users; // data user
use App\Models\OrderData; // data order
use App\Models\barangs; // data barang
use App\Models\Tampilan3Akun;
use Auth;
class BisnisAst extends Controller
{
  public function __construct()
  {
     $this->middleware('auth:admin');
  }





  public function TampilanDepanAssiten()
  {
      return view('Asisten/HalamanDepanAssisten');
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
