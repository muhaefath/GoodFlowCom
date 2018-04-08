@extends('layouts.plane')


@section('Headline')
<a class="nav-link " href={{url('/bussinessman/order/filter') }}>  Order
  <a class="nav-link" href={{url('/bussinessman/order/pilihgudang') }}>  Cari Gudang
<a class="nav-link" href={{url('/bussinessman/inventory/databarang') }}>  Inventory
<a class="nav-link" href={{url('/bussinessman/history') }}>  History
<a class="nav-link" href={{url('/bussinessman/staistik') }}>  Statistik
@endsection


@section('body')


   <div class="row justify-content-center">
     <div>
        <p>

        </p>
     </div>

      <div >

         <form>


         </form>

      </div>


   </div>


   <div class="container">
       <div class="row justify-content-center">
           <div class="col-md-8">
               <div class="card card-default">
                   <div class="card-header">Isi Data Barang</div>

                   <div class="card-body">
                       <form method="GET"  action = "/bussinessman/order/pilihgudang">
                           @csrf

                           <div class="form-group row">
                               <label  for="Kategori" class="col-md-4 col-form-label text-md-right">Kategori Bisnis</label>

                               <div class="col-md-6">

                                 <select id="Kategori"   name="KategoriBisnis" required >
                                   <option value="Kuliner">Kuliner</option>
                                    <option value="Fashion">Fashion</option>
                                     <option value="Elektronik">Elektronik</option>
                                 </select>
                               </div>
                           </div>

                           <div class="form-group row">
                               <label for="Lokasi" class="col-md-4 col-form-label text-md-right">Lokasi Gudang</label>

                               <div class="col-md-6">

                                   <select id="Lokasi"   name="LokasiGudang" required >
                                     <option value="Jakarta Selatan">Jakarta Selatan</option>
                                      <option value="Jakarta Barat">Jakarta Barat</option>
                                       <option value="Jakarta Timur">Jakarta Timur</option>
                                   </select>


                               </div>
                           </div>


                           <div class="form-group row">
                               <label for="Paket" class="col-md-4 col-form-label text-md-right">Pilih Paket</label>

                               <div class="col-md-6">
                                 <select id="Paket"   name="Paket" required >
                                   <option value="FullService">Full Service</option>
                                    <option value="Warehouse">Warehouse</option>
                                     <option value="Logistik">Logistik</option>
                                 </select>
                               </div>
                           </div>


                           <div class="form-group row mb-0">
                               <div class="col-md-6 offset-md-4">
                                   <button type="submit" name ="next1" value ="next1">
                                       Submit
                                   </button>
                               </div>
                           </div>
                       </form>
                   </div>
               </div>
           </div>
       </div>
   </div>

@endsection
