@extends('layouts.appWarehouseman')

@section('Headline')
    <a class="nav-link" href={{url('/bussinessast/Warehouse/daftargudang') }}>  daftar gudang
    <a class="nav-link" href={{url('/bussinessast/Warehouse/inventory') }}>  Inventory
    <a class="nav-link" href={{url('/bussinessman/history') }}>  History
    <a class="nav-link" href={{url('/bussinessman/history') }}>  Pendapatan

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




@section('content')

<div class="tab">
  <button class="tablinks"  onclick="openCity(event, 'DataGudang')" id="defaultOpen">Data Gudang</button>
  <button class="tablinks"  onclick="openCity(event, 'DataBarangdiGudang')" >Data Barang di Gudang</button>
  <button class="tablinks" onclick="openCity(event, 'DataBarangDikirim')">Data Barang dikirim</button>
  <button class="tablinks" onclick="openCity(event, 'DataBarangDiambil')">Data Barang diambil</button>
  <button class="tablinks" onclick="openCity(event, 'History')">History</button>
  <button class="tablinks" onclick="openCity(event, 'Pendapatan')">Pendapatan</button>
  <button class="tablinks" onclick="openCity(event, 'BarangDikirimHariIni')">Barang dikirim Hari ini</button>
</div>


  <div id="DataGudang" class="tabcontent">
    <table border="1" cellspacing="0" width ="270%">
        <tr>
          <th> Lokais Gudang</th><th>Deskripsi</th>
        </tr>
        @foreach($status->gudangs  as $object)
        <tr>
        <td>{{$object->lokasigudang}}</td>
        </tr>
        @endforeach
    </table>

  </div>

  <div id="DataBarangdiGudang" class="tabcontent">
    <table border="1" cellspacing="0" width ="270%">
        <tr>
          <th> Nama Produk</th><th>Deskripsi</th><th>Quantity</th><th>Gudang</th><th>Status</th>
        </tr>

        @foreach($status->gudangs as $object)

          <tr>
            @foreach($object->barangs as $object2)
            <tr>
            <td> <a> {{$object2->nama}} </a></td>
            <td> <a> {{$object2->deskripsi}} </a></td>
            <td> <a> {{$object2->quantity}} </a></td>
            <td> <a href="/bussinessast/Warehouse/inventory/ProfileGudang/{{$object2->gudangs->id}}"> {{$object2->gudangs->lokasigudang}} </a></td>
            <td> <a> {{$object2->status}} </a></td>
            </tr>
            @endforeach
          </tr>

        @endforeach

    </table>

  </div>

  <div id="DataBarangDikirim" class="tabcontent">

        <div>
          <a  href="/bussinessman/order/1"> Gudang Baru </a>
        </div>

          <div>
              <a  href="/bussinessman/order/1"> Gudang Lama </a>
          <div>

  </div>


  <div id="Status" class="tabcontent">



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
