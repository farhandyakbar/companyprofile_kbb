<?php

use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;

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

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', 'PagesController@home');
    Route::resource('/barang', 'BarangController');
    Route::resource('/kategori', 'KategoriController');
    Route::resource('/pelanggan', 'PelangganController');
    Route::resource('/karyawan', 'KaryawanController');
// Route::get('login', function () {
//     return view('login');
// });
});


Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();


