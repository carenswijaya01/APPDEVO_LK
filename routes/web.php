<?php

use App\Http\Controllers\MemberProgramController;
use App\Http\Controllers\pointsController;
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

// ROOT (GUEST)
Route::get('/', function () {
    return view('welcome');
});

Route::group([
    'prefix' => config('admin.prefix'),
    'namespace' => 'App\\Http\\Controllers',
], function () {

    //    LOGIN ADMIN
    Route::get('login', 'LoginAdminController@formLogin')->name('admin.login');
    Route::post('login', 'LoginAdminController@login');

    // ADMIN & SUPER ADMIN
    Route::middleware(['auth:admin'])->group(function () {
        Route::post('logout', 'LoginAdminController@logout')->name('admin.logout');
        Route::get('/', fn () => view('dashboard'))->name('dashboard');
    });

    //    SUPER ADMIN
    Route::middleware(['auth:admin', 'can:role,"superadmin"'])->group(function () {
        // CRUD ADMIN
        Route::resource('/admin', AdminController::class);
        Route::get('/type-point', fn () => view('crud-point-limit'));
    });

    //    ADMIN
    Route::middleware(['auth:admin', 'can:role,"admin"'])->group(function () {
        //        DAFTAR-KEGIATAN
        Route::get('/validate-memberprogram', [MemberProgramController::class, 'show']);
        Route::post('/validate-memberprogram', [MemberProgramController::class, 'update']);
        //        INPUT POINT
        route::resource('/points', pointsController::class);
    });
});

// MAHASISWA
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/home', fn () => view('home'));
    Route::get('/user/update-password', fn () => view('auth.mahasiswa.update-password'))->name('update-password-user');
    // DAFTAR-KEGIATAN
    Route::get('/registration-program', [MemberProgramController::class, 'index']);
    Route::post('/registration-program', [MemberProgramController::class, 'store']);
});
