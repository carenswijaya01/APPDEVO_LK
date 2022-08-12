<?php

<<<<<<< HEAD
use App\Http\Controllers\KegiatanController;
=======
use App\Http\Controllers\AdminController;
>>>>>>> 5741d0ab45b682c3d666f870faa9979eb795d8ad
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
<<<<<<< HEAD


Route::get('/daftarKegiatan', '\App\Http\Controllers\KegiatanController@index')->name('daftarKegiatan');
Route::get('/tambahKegiatan', '\App\Http\Controllers\KegiatanController@create')->name('tambahKegiatan');
Route::post('/simpanKegiatan', '\App\Http\Controllers\KegiatanController@store')->name('simpanKegiatan');
Route::get('/editKegiatan/{id}', '\App\Http\Controllers\KegiatanController@edit')->name('editKegiatan');
Route::post('/updateKegiatan/{id}', '\App\Http\Controllers\KegiatanController@update')->name('updateKegiatan');
Route::get('/deleteKegiatan/{id}', '\App\Http\Controllers\KegiatanController@destroy')->name('deleteKegiatan');
=======
Route::resource('admin', AdminController::class);
>>>>>>> 5741d0ab45b682c3d666f870faa9979eb795d8ad
