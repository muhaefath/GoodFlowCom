@extends('layouts.plane')


@section('Headline')

@endsection


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
                <a class="navbar-brand " href="{{ url ('') }}"><img  src = "{{ asset('/Logo2.png') }}" width ="80" height = ""  >
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
     <div class="row">
       @yield('section')

          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-md-8">
                      <div class="card card-default">
                        Comming Soon

                      </div>
                  </div>
              </div>
          </div>
           </div>
           <!-- /#page-wrapper -->
       </div>
   </div>
@stop


@section('Headline')
    <a class="navbar-brand" href={{url('/bussinessman/order/filter') }}>  Order
    <a class="navbar-brand" href={{url('/bussinessman/order/pilihgudang') }}>  Cari Gudang
    <a class="navbar-brand" href={{url('/bussinessman/inventory/databarang') }}>  Inventory
    <a class="navbar-brand" href={{url('/bussinessman/history') }}>  History
    <a class="navbar-brand" href={{url('/bussinessman/staistik') }}>  Statistik
@endsection

@section('body')
    <p> Selamat Datang </p>
@endsection
