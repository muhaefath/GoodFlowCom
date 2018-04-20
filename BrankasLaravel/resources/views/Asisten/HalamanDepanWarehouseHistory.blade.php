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

<div class="tab">
  <button class="tablinks"  onclick="openCity(event, 'ALL')" id="defaultOpen">All</button>
  <button class="tablinks"  onclick="openCity(event, 'BarangDikirim')" >Barang Dikirim</button>
  <button class="tablinks" onclick="openCity(event, 'BarangDiambil')">Barang Diambil</button>
  <button class="tablinks" onclick="openCity(event, 'HariIni')">Dikirim Hari Ini</button>

</div>


  <div id="ALL" class="tabcontent">
    Semua Transaksi Barang

  </div>

  <div id="BarangDikirim" class="tabcontent">
    Data Barang yang Sedang Dikirim

  </div>

  <div id="BarangDiambil" class="tabcontent">
    Data Barang yang Sudah Sampai

  </div>


  <div id="HariIni" class="tabcontent">
    Data Barang yang Dikirim Hari Ini


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
      document.getElementById("form2").style.display = "none";

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
