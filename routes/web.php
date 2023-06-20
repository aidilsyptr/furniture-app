<?php

use App\Http\Controllers\PesanController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\NavigasiController;

use App\Models\Barang;

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
    $barangs = Barang::all();    
    return view('home', compact('barangs'));
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('pesan/{id}', [App\Http\Controllers\PesanController::class, 'index']);
Route::post('pesan/{id}', [App\Http\Controllers\PesanController::class, 'pesan']);
Route::get('check-out', [App\Http\Controllers\PesanController::class, 'check_out']);
Route::delete('check-out/{id}', [App\Http\Controllers\PesanController::class, 'delete']);

Route::get('konfirmasi-check-out', [App\Http\Controllers\PesanController::class, 'konfirmasi']);

Route::get('profile', [App\Http\Controllers\ProfileController::class, 'index']);

Route::post('profile', [App\Http\Controllers\ProfileController::class, 'update']);
route::get('history',[App\Http\Controllers\HistoryController::class,'index'])->name('history');
route::get('history/{id}',[App\Http\Controllers\HistoryController::class,'detail']);

route::get('history/{id}',[App\Http\Controllers\HistoryController::class,'detail']);

Route::get('/barang', [NavigasiController::class, 'barang'])->name('barang');
Route::get('/pelanggan', [NavigasiController::class, 'pelanggan'])->name('pelanggan');
Route::get('barangs/{barang}/edit', 'App\Http\Controllers\BarangController@edit')->name('editbarang');
Route::post('barangs/{barang}', 'App\Http\Controllers\BarangController@update')->name('barangs.update');

Route::delete('/barang/{id}', [BarangController::class,'destroy'])->name('barangs.destroy');
Route::delete('/barang/{id}', [BarangController::class,'destroy'])->name('barangs.destroy');
Route::delete('/barang/{id}', [BarangController::class,'destroy'])->name('barangs.destroy');
Route::get('/tambahbarang', function () {
    return view('tambahbarang');
});
Route::get('/tambahbarang', [BarangController::class, 'tambahbarang']);
Route::post('/barang', [BarangController::class, 'store'])->name('barang.store');


