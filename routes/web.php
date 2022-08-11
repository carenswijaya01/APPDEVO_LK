<?php

use App\Http\Controllers\MemberProgramController;
use App\Models\MemberProgram;
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

Route::group([
    'prefix'=>config('admin.prefix'),
    'namespace'=>'App\\Http\\Controllers',
],function () {

    Route::get('login','LoginAdminController@formLogin')->name('admin.login');
    Route::post('login','LoginAdminController@login');

    Route::middleware(['auth:admin'])->group(function () {
        Route::post('logout','LoginAdminController@logout')->name('admin.logout');
        Route::view('/','dashboard')->name('dashboard');
        Route::view('/pengumuman','crud-pengumuman')->name('pengumuman')->middleware('can:role,"admin"');
        Route::view('/kegiatan','crud-kegiatan')->name('kegiatan')->middleware('can:role,"admin"');
        Route::view('/validasi','validasi-pendaftar')->name('validasi')->middleware('can:role,"admin"');
        Route::view('/manage','manage-point')->name('manage')->middleware('can:role,"admin"');
        Route::view('/admin','crud-admin')->name('admin')->middleware('can:role,"superadmin"');
        Route::view('/point','crud-point-limit')->name('point')->middleware('can:role,"superadmin"');
//        Daftar-kegiatan
        Route::get('/validate-memberprogram', [MemberProgramController::class, 'show']);
        Route::post('/validate-memberprogram', [MemberProgramController::class, 'update']);
    });
});

// Mahasiswa
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/home', fn() => view('home'));
    Route::get('/user/update-password', fn() => view('auth.mahasiswa.update-password'))->name('update-password-user');
    // Daftar-kegiatan
    Route::get('/registration-program', [MemberProgramController::class, 'index']);
    Route::post('/registration-program', [MemberProgramController::class, 'store']);
});


