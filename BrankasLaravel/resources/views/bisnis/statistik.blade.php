@extends('layouts.app')


@section('Headline')
      <a class="nav-link" href={{url('/bussinessman/order/filter') }}>  Order
        <a class="nav-link" href={{url('/bussinessman/order/pilihgudang') }}>  Cari Gudang
      <a class="nav-link" href={{url('/bussinessman/inventory/databarang') }}>  Inventory
      <a class="nav-link" href={{url('/bussinessman/history') }}>  History
        <a class="nav-link" href={{url('/bussinessman/staistik') }}>  Statistik
@endsection


@section('content')


   <div class="row justify-content-center">
        ini statistik
       <br>



   </div>

@endsection
