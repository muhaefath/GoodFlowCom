@extends('layouts.dashboard')


@section('Headline')
    <a class="navbar-brand" href={{url('/bussinessman/order/filter') }}>  Order
    <a class="navbar-brand" href={{url('/bussinessman/order/pilihgudang') }}>  Cari Gudang
    <a class="navbar-brand" href={{url('/bussinessman/inventory/databarang') }}>  Inventory
    <a class="navbar-brand" href={{url('/bussinessman/history') }}>  History
    <a class="navbar-brand" href={{url('/bussinessman/staistik') }}>  Statistik
@endsection
