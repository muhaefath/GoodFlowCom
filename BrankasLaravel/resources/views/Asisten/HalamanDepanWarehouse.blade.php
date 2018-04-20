@extends('layouts.dashboardWarehouse')

@section('Headline')
    <a class="navbar-brand" href={{url('/bussinessast/Warehouse/daftargudang') }}>  daftar gudang
    <a class="navbar-brand" href={{url('/bussinessast/Warehouse/inventory') }}>  Inventory
    <a class="navbar-brand" href={{url('/bussinessast/Warehouse/inventory/History') }}>  History
    <a class="navbar-brand" href={{url('/bussinessast/Warehouse/inventory/Pendapatan') }}>  Pendapatan

@endsection

@section('AturCSS')
        <style>
                  .tab {
          float: left;
          border: 1px solid #ccc;
          background-color: #f1f1f1;
          width: 15%;
          height: 300px;
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
          padding: 0px 10px;

          }
          </style>



@endsection




@section('section')



  <div id="DataGudang" class="tabcontent">
    <table border="1" cellspacing="0" width ="20%">
        <tr>
          <th> Lokais Gudang</th>
        </tr>
        @foreach($status->gudangs  as $object)
        <tr>
        <td>{{$object->lokasigudang}}</td>
        </tr>
        @endforeach
    </table>

  </div>





@endsection
