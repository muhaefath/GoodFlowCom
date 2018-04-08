<?php

namespace App\Http\Controllers\Auth;

use App\Admin; // data user
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;
class AdminLoginController extends Controller
{
    public function __construct()
    {
      $this->middleware('guest:admin',['except'=>['logout']]);
    }

    public function ShowLoginForm()
    {
      return view('auth.admin-login');
    }

    public function LoginAdmin(Request $request)
    {
      //password = $clinics->password = bcrypt($request->password);
      $data = new admin;


      $this->validate($request,[
          'email' => 'required|email',
          'password' => 'required|min:6'
      ]);
      //$request->password = $clinics->password = bcrypt($request->password);
      //Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)
      if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember))
      {


          return redirect()->intended(route('admin.dashboard'));
      }

       return redirect()->back()->withInput($request->only('email','remember'));

    }
    public function logout()
    {
        Auth::guard('admin')->logout();

      //  $request->session()->invalidate();

        return redirect('/bussinessast');
    }

    
}
