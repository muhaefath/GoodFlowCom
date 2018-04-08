@extends('layouts.app')


@section('Headline')
<a class="nav-link" href={{url('/bussinessast/Warehouse/daftargudang') }}>  daftar gudang
<a class="nav-link" href={{url('/bussinessast/Warehouse/inventory') }}>  Inventory
<a class="nav-link" href={{url('/bussinessman/history') }}>  History
<a class="nav-link" href={{url('/bussinessman/history') }}>  Pendapatan

@endsection


@section('content')


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
                   <div class="card-header">Isi Data Gudang</div>

                   <div class="card-body">
                       <form method="POST"  action = "/bussinessast/Warehouse/inventory">
                           @csrf


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
