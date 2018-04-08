<?php

namespace App\Http\Controllers\Auth;

use App\Warehousemen; // data user
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;
class WarehousemanLoginController extends Controller
{
    public function __construct()
    {
      $this->middleware('guest:warehouseman',['except'=>['logout']]);
    }

    public function ShowLoginForm()
    {
      return view('auth.warehouseman-login');
    }

    public function LoginWarehouseman(Request $request)
    {
      $data = new Warehousemen;


      $this->validate($request,[
          'email' => 'required|email',
          'password' => 'required|min:6'
      ]);
      //$request->password = $clinics->password = bcrypt($request->password);
      //Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)
      if(Auth::guard('warehouseman')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember))
      {

            return redirect()->intended(route('warehouseman.dashboard'));
      }


       return redirect()->back()->withInput($request->only('email','remember'));
    }

    public function logout()
    {
        Auth::guard('warehouseman')->logout();

      //  $request->session()->invalidate();

        return redirect('/bussinessast');
    }
}
