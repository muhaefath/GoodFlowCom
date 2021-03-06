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

<!--
  <div class="tab">
    <button class="tablinks" onclick="openCity(event, 'DataBarang')" id="defaultOpen">Data Barang</button>
    <button class="tablinks" onclick="openCity(event, 'DataGudang')">Data Gudang</button>
    <button class="tablinks" onclick="openCity(event, 'Tambah')">Tambah</button>
    <button class="tablinks" onclick="openCity(event, 'Status')">Status</button>
-->
  </div>



      <div id="DataBarang" class="tabcontent">
        <div class="col-sm-12" >



      		@section ('atable_panel_body')
        </div>

           <table  class="table table-condensed table-bordered table-striped">
             <tr>
               <th> Nama Produk</th><th>Deskripsi</th><th>Quantity</th><th>Gudang</th><th>Pemilik Gudang</th><th>Status</th>
             </tr>
             @foreach($status->barangs  as $object)
             <tr>
             <td>{{$object->nama}}</td>
             <td>{{$object->deskripsi}}</td>
             <td>{{$object->quantity}}</td>
             <td>{{$object->gudangs->lokasigudang}}</td>
             <td>{{$object->gudangs->warehousemans->name}}</td>
             <td>{{$object->status}}</td>
             </tr>
             @endforeach
         </table>

      		@endsection
      		@include('widgets.panel', array('header'=>true, 'as'=>'atable'))






        </div>

        <script>


        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        function nextPrev() {
            document.getElementById("regForm").submit();
        }

        function showTab(n) {
          // This function will display the specified tab of the form...

          //... and fix the Previous/Next buttons:
          if (n == 0) {
            document.getElementById("pilihgudang").style.display = "none";

          } else {
           document.getElementById("form1").style.display = "inline";

          }
          if (n == 1) {
            document.getElementById("form2").style.display = "inline";
          } else {
            document.getElementById("form1").style.display = "none";
          }


        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
        </script>



@endsection
