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





        <div id="Tambah" class="tabcontent">


                <form id="regForm" method ="POST" action="/bussinessman/inventory/databarang">
                    <!--
                          <div class="tab2">Daftar Barang:
                              <p><input placeholder="Nama Barang" oninput="this.className = ''" name="NamaBarang"></p>
                              <p><input placeholder="Deskripsi" oninput="this.className = ''" name="Deskripsi"></p>
                              <p><input placeholder="quantity" oninput="this.className = ''" name="qty"></p>

                              <div class="form-group row">

                                  <div class="col-md-6">
                                      <select id="Lokasi"   name="LokasiGudang" required >

                                        @foreach($gudang as $object)
                                        <option value= "{{$object->gudang}}" >
                                          {{$object->gudang}}

                                        </option>
                                       @endforeach

                                      </select>
                                  </div>
                              </div>

                          </div>


                          <div style="overflow:auto;">
                            <div style="float:left;">
                              <button type="button" id="Reorder" onclick="nextPrev2()">Tambah</button>
                              <button type="button" id="nextBtn" onclick="nextPrev()">Submit</button>
                            </div>
                          </div>

                          {{csrf_field()}}
                  </form>
                -->



        <div id="Status" class="tabcontent">

              <a  >Comming Soon </a>

        </div>



        <script>




@endsection
