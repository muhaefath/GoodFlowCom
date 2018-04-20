@extends('layouts.plane')

@section('body')
<div id="wrapper">

       <!-- Navigation -->
       <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
           <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                   <span class="sr-only">Toggle navigation</span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
               </button>
                 <a class="navbar-brand " href="{{ url ('') }}"><img  src = "{{ asset('/Logo2.png') }}" width ="90" height = ""  >
               <a class="navbar-brand " href={{url('/bussinessman/order/filter') }}>  Order
                 <a class="navbar-brand" href={{url('/bussinessman/order/pilihgudang') }}>  Cari Gudang
               <a class="navbar-brand" href={{url('/bussinessman/inventory/databarang') }}>  Inventory
               <a class="navbar-brand" href={{url('/bussinessman/history') }}>  History
               <a class="navbar-brand" href={{url('/bussinessman/staistik') }}>  Statistik
               @yield('Headline')
           </div>
           <!-- /.navbar-header -->

           <ul class="nav navbar-top-links navbar-right">

               <!-- /.dropdown -->

               <!-- /.dropdown -->

               <!-- /.dropdown -->
               <li class="dropdown">
                   <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                       <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                   </a>
                   <ul class="dropdown-menu dropdown-user">
                       <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                       </li>
                       <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                       </li>
                       <li class="divider"></li>
                       <li><a href="{{ url ('login') }}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                       </li>
                   </ul>
                   <!-- /.dropdown-user -->
               </li>
               <!-- /.dropdown -->
           </ul>

       </nav>

       <div id="page-wrapper">
      <div class="row">
               <div class="col-lg-12">
                   <h1 class="page-header">@yield('page_heading')</h1>
               </div>
               <!-- /.col-lg-12 -->
          </div>


          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-md-8">
                      <div class="card card-default">
                          <div class="card-header">Login</div>

                          <div class="card-body">
                              <form method="POST" action="{{ route('login') }}">
                                  @csrf

                                  <div class="form-group row">
                                      <label for="email" class="col-sm-4 col-form-label text-md-right">E-Mail Address</label>

                                      <div class="col-md-6">
                                          <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                          @if ($errors->has('email'))
                                              <span class="invalid-feedback">
                                                  <strong>{{ $errors->first('email') }}</strong>
                                              </span>
                                          @endif
                                      </div>
                                  </div>

                                  <div class="form-group row">
                                      <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                                      <div class="col-md-6">
                                          <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                          @if ($errors->has('password'))
                                              <span class="invalid-feedback">
                                                  <strong>{{ $errors->first('password') }}</strong>
                                              </span>
                                          @endif
                                      </div>
                                  </div>

                                  <div class="form-group row">
                                      <div class="col-md-6 offset-md-4">
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                              </label>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="form-group row mb-0">
                                      <div class="col-md-8 offset-md-4">
                                          <button type="submit" class="btn btn-primary">
                                              Login
                                          </button>

                                          <a class="btn btn-link" href="{{ route('password.request') }}">
                                              Forgot Your Password?
                                          </a>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
           </div>
           <!-- /#page-wrapper -->
       </div>
   </div>


@endsection
