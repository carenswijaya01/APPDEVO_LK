<?php

use App\Http\Controllers\MemberProgramController;
use App\Http\Controllers\pointsController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TypePointController;
use App\Models\Pengumuman;
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
    $pengumuman = Pengumuman::paginate(10);
    return view('homepage', compact('pengumuman'));
});

Route::get('/pengumuman', function () {
    $pengumuman = Pengumuman::paginate(10);
    return view('pengumuman', compact('pengumuman'));
});

Route::group([
    'prefix' => config('admin.prefix'),
    'namespace' => 'App\\Http\\Controllers',
], function () {

    //    LOGIN ADMIN
    Route::get('login', 'LoginAdminController@formLogin')->name('admin.login');
    Route::post('login', 'LoginAdminController@login');

    // Pengumuman
    Route::resource('pengumuman', PengumumanController::class);

    // ADMIN & SUPER ADMIN
    Route::middleware(['auth:admin'])->group(function () {
        Route::post('logout', 'LoginAdminController@logout')->name('admin.logout');
        Route::get('/', fn () => view('dashboard'))->name('dashboard');
    });

    //    SUPER ADMIN
    Route::middleware(['auth:admin', 'can:role,"superadmin"'])->group(function () {
        // CRUD ADMIN
        Route::resource('/admin', AdminController::class);
        // TYPE POINT
        Route::get('/type-point', [TypePointController::class, 'index'])->name('type-point.index');
        Route::put('/type-point', [TypePointController::class, 'update'])->name('type-point.update');
    });

    //    ADMIN
    Route::middleware(['auth:admin', 'can:role,"admin"'])->group(function () {
        // DAFTAR-KEGIATAN
        Route::get('/validate-memberprogram', [MemberProgramController::class, 'show']);
        Route::post('/validate-memberprogram', [MemberProgramController::class, 'update']);
        // INPUT POINT
        route::resource('/points', pointsController::class);
        // Kegiatan
        Route::get('/daftarKegiatan', 'KegiatanController@index')->name('daftarKegiatan');
        Route::get('/tambahKegiatan', 'KegiatanController@create')->name('tambahKegiatan');
        Route::post('/simpanKegiatan', 'KegiatanController@store')->name('simpanKegiatan');
        Route::get('/editKegiatan/{id}', 'KegiatanController@edit')->name('editKegiatan');
        Route::post('/updateKegiatan/{id}', 'KegiatanController@update')->name('updateKegiatan');
        Route::get('/deleteKegiatan/{id}', 'KegiatanController@destroy')->name('deleteKegiatan');
    });
});

// MAHASISWA
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/home', [pointsController::class,'detailPoint']);
    Route::get('/user/update-password', fn () => view('auth.mahasiswa.update-password'))->name('update-password-user');
    Route::get('/point/show-user/', [pointsController::class, 'showUserPoint'])->name('points.show.user');
    // DAFTAR-KEGIATAN
    //    Route::get('/registration-program', [MemberProgramController::class, 'index']);
    //    Route::post('/registration-program', [MemberProgramController::class, 'store']);
});
