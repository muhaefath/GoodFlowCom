<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/bussinessman/logout','Auth\LoginController@userlogout')->name('user.logout');

Route::get('/bussinessman','Bisnisman@TampilanDepan');
Route::post('/bussinessman','Bisnisman@SuksesStore1')->middleware('auth');

Route::get('/bussinessman/order/filter','Bisnisman@order');
//Route::post('/bussinessman/order/filter','Bisnisman@SuksesOrder');
Route::get('/bussinessman/order/pilihgudang','Bisnisman@orderRoom');
Route::get('/bussinessman/order/pilihgudang/{id}','Bisnisman@PageGudang')->middleware('auth');
Route::get('/bussinessman/order/profilepemilikgudang/{id}','Bisnisman@ProfilePemilikGudang')->middleware('auth');
Route::get('/bussinessman/order/profilepemilikgudang/{id}/pesanbarang','Bisnisman@PesanBarang')->middleware('auth');
Route::post('/bussinessman/order/{id}/sukses','Bisnisman@PesanBarangSukses')->middleware('auth');
// pengaturan Pada Menu Bisnisman

Route::get('/bussinessman/inventory/databarang','Bisnisman@inventory')->middleware('auth');
Route::get('/bussinessman/inventory/databarang/tambahbarang','Bisnisman@TambahBarang')->middleware('auth');
Route::post('/bussinessman/inventory/databarang','Bisnisman@SuksesStore2');

Route::get('/bussinessman/history','Bisnisman@history');
Route::get('/bussinessman/staistik','Bisnisman@statistik');



// Pengaturan Login Pada Bisnis Asisten
Route::get('/bussinessast','Bisnisman@TampilanDepan2');


Route::get('/bussinessast/Assisten/register','Auth\AdminRegisterController@showRegistrationForm')->name('admin.register');
Route::post('/bussinessast/Assisten/register','Auth\AdminRegisterController@register')->name('admin.register.submit');

Route::get('/bussinessast/Assisten/login','Auth\AdminLoginController@ShowLoginForm')->name('admin.login');
Route::post('/bussinessast/Assisten/login','Auth\AdminLoginController@LoginAdmin')->name('admin.login.submit');
Route::get('/bussinessast/Assisten','BisnisAst@TampilanDepanAssiten')->name('admin.dashboard');
Route::post('/bussinessast/Assisten/logout','Auth\AdminLoginController@logout')->name('admin.logout');

  //Route::post('/bussinessast','BisnisAst@SuksesRegis');


// Pengaturan Login Pada Warehouseman
Route::get('/bussinessast/Warehouse/register','Auth\WarehousemanRegisterController@showRegistrationForm')->name('warehouseman.register');
Route::post('/bussinessast/Warehouse/register','Auth\WarehousemanRegisterController@register')->name('warehouseman.register.submit');

Route::get('/bussinessast/Warehouse/login','Auth\WarehousemanLoginController@ShowLoginForm')->name('warehouseman.login');
Route::post('/bussinessast/Warehouse/login','Auth\WarehousemanLoginController@LoginWarehouseman')->name('warehouseman.login.submit');

Route::get('/bussinessast/Warehouse/inventory','WarehouseController@TampilanDepanWarehouse')->name('warehouseman.dashboard');
Route::get('/bussinessast/Warehouse/inventory/ProfileGudang/{id}','WarehouseController@ProfileGudang')->name('warehouseman.dashboard');
Route::get('/bussinessast/Warehouse/daftargudang','WarehouseController@daftargudang')->name('warehouseman.daftargudang');
Route::post('/bussinessast/Warehouse/inventory','WarehouseController@StoreGudang')->name('warehouseman.dashboard');

Route::post('/bussinessast/Warehouse/logout','Auth\WarehousemanLoginController@logout')->name('warehouseman.logout');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
