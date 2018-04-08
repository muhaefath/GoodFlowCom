@extends('layouts.app')

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
    <a class="nav-link" href={{url('/bussinessman/order/filter') }}>  Order
    <a class="nav-link" href={{url('/bussinessman/order/pilihgudang') }}>  Cari Gudang
    <a class="nav-link" href={{url('/bussinessman/inventory/databarang') }}>  Inventory
    <a class="nav-link" href={{url('/bussinessman/history') }}>  History
    <a class="nav-link" href={{url('/bussinessman/staistik') }}>  Statistik
@endsection


@section('content')



        <div id="DataGudang" class="tabcontent">

          <table border="1" cellspacing="0" width ="220%">
            <tr>
              <th> Nama Pemilik </th><th>Lokasi Gudang</th><th>Deskripsi</th><th>Habis Kontrak</th>
            </tr>
            @foreach($status->barangs  as $object)
            <tr>
                 <td > <a href='/bussinessman/order/pilihgudang/{{$object->gudangs->id}}' > {{$object->gudang}} </a></td>
                 <td> <a href='/bussinessman/order/profilepemilikgudang/{{$object->gudangs->warehousemans->id}}'>  {{$object->gudangs->warehousemans->name}} </a> </td>
                 <td> </td>
                  <td> </td>
            </tr>
            @endforeach
        </table>

        </div>




@endsection
