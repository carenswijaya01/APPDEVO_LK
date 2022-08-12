<?php


use App\Http\Controllers\KegiatanController;

use App\Http\Controllers\AdminController;

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

Route::get('/', function () {
    return view('welcome');
});


// Kegiatan
Route::get('/daftarKegiatan', '\App\Http\Controllers\KegiatanController@index')->name('daftarKegiatan');
Route::get('/tambahKegiatan', '\App\Http\Controllers\KegiatanController@create')->name('tambahKegiatan');
Route::post('/simpanKegiatan', '\App\Http\Controllers\KegiatanController@store')->name('simpanKegiatan');
Route::get('/editKegiatan/{id}', '\App\Http\Controllers\KegiatanController@edit')->name('editKegiatan');
Route::post('/updateKegiatan/{id}', '\App\Http\Controllers\KegiatanController@update')->name('updateKegiatan');
Route::get('/deleteKegiatan/{id}', '\App\Http\Controllers\KegiatanController@destroy')->name('deleteKegiatan');

Route::resource('admin', AdminController::class);
