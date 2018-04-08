@extends('layouts.dashboard')

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
@section('Headline')
    <a class="navbar-brand" href={{url('/bussinessman/order/filter') }}>  Order
    <a class="navbar-brand" href={{url('/bussinessman/order/pilihgudang') }}>  Cari Gudang
    <a class="navbar-brand" href={{url('/bussinessman/inventory/databarang') }}>  Inventory
    <a class="navbar-brand" href={{url('/bussinessman/history') }}>  History
    <a class="navbar-brand" href={{url('/bussinessman/staistik') }}>  Statistik
@endsection


@section('section')

<div id="DataBarang" class="tabcontent">
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
        <td> <a href="/bussinessman/order/profilepemilikgudang/{{$object->warehousemans->id}}"> {{$object->warehousemans->name}}  </a> </td>
        <td>  <a href="/bussinessman/order/pilihgudang/{{$object->id}}"> {{$object->lokasigudang}}  </a> </td>
        <td>  </td>
        </tr>
       @endforeach

       @endsection
       @include('widgets.panel', array('header'=>true, 'as'=>'atable'))




   </table>


  </div>


@endsection
