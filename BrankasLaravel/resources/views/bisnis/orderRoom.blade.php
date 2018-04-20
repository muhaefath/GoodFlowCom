@extends('layouts.plane')

@section('AturCSS')
        <style>
                  .tab {
          float: left;
          border: 1px solid #ccc;
          background-color: #f1f1f1;
          width: 15%;
          height: 300px;
          }

                  .tab {

          }

          /* Style the buttons inside the tab */
          .tab button {
          display: block;
          background-color: inherit;
          color: black;
          padding: 22px 16px;
          width: 100%;
          border: none;
          outline: none;
          text-align: left;
          cursor: pointer;
          transition: 0.3s;
          font-size: 17px;
          }

          /* Change background color of buttons on hover */
          .tab button:hover {
          background-color: #ddd;
          }

          /* Create an active/current "tab button" class */
          .tab button.active {
          background-color: #ccc;
          }

          /* Style the tab content */
          .tabcontent {
          float: left;
          padding: 0px 5px;

          }

          </style>



@endsection



@section('body')

<div id="DataBarang" class="tabcontent">
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

  <div class="col-sm-12" >


    @section ('atable_panel_title','Data Gudang')
    @section ('atable_panel_body')
  </div>
     <table  class="table table-condensed table-bordered table-striped">
       <tr>
         <th> Nama Pemilik</th><th>Lokasi</th><th>Alamat</th>
       </tr>
       <tr>

       @foreach($status as $object)
        <tr>
        <td> <a  href="/bussinessman/order/profilepemilikgudang/{{$object->warehousemans->id}}"> {{$object->warehousemans->email}}  </a> </td>
        <td>  <a  href="/bussinessman/order/pilihgudang/{{$object->id}}"> {{$object->lokasigudang}}  </a> </td>
        <td>  </td>
        </tr>
       @endforeach

       @endsection
       @include('widgets.panel', array('header'=>true, 'as'=>'atable'))




   </table>


  </div>


@endsection
