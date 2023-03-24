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

// Route::get('/', function () {
//     return view('welcome');
// });

//Tanda slash ( /user ), artinya kita berada pada halaman utama atau index.
//GET digunakan untuk menampilkan resource 
//ManagementUserController adalah class index yang akan diakses
Route::get('/user', 'ManagementUserController@index');

//menambakan alamat-alamat url baru yang menghubungkan dengan method-method ManagementUserController.php tanpa mendeklarasikan banyak url
//Fungsi resource mengenerate route default yang dimiliki oleh sebuah fungsi seperti index, edit, create, store, update, show, dan destroy
// Route::resource('/user', 'ManagementUserController');

//menambakan alamat url baru yang menghubungkan dengan home.blade.php
// Route::get("/home", function(){
//     return view("home");
// });
