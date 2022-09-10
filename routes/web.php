<?php

use App\Http\Controllers\MemberProgramController;
use App\Http\Controllers\pointsController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProposalAnggaranController;
use App\Http\Controllers\TypePointController;
use App\Models\Pengumuman;
use Illuminate\Support\Facades\Route;

use App\Models\Role;
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

    // ALL ADMIN ROLE
    Route::middleware(['auth:admin'])->group(function () {
        Route::post('logout', 'LoginAdminController@logout')->name('admin.logout');
        Route::get('/', fn () => view('dashboard'))->name('dashboard');
        Route::get('/tentang-kegiatan', fn () => view('pemegang-kegiatan.proposal-kegiatan.tentang-kegiatan'))->name('tentang-kegiatan');
        Route::get('/tentang-anggaran', fn () => view('pemegang-kegiatan.proposal-anggaran.tentang-anggaran'))->name('tentang-anggaran');
        Route::get('/proposal-kegiatan-bidang', fn () => view('role.bidang.proposal-kegiatan-bidang'))->name('proposal-kegiatan-bidang');
        Route::get('/proposal-anggaran-bidang', fn () => view('role.bidang.proposal-anggaran-bidang'))->name('proposal-anggaran-bidang');
        Route::get('/proposal-anggaran-bendahara', fn () => view('role.bendahara-smf.proposal-anggaran-bendahara'))->name('proposal-anggaran-bendahara');
        Route::get('/proposal-anggaran-komisic', fn () => view('role.komisic.proposal-anggaran-komisic'))->name('proposal-anggaran-komisic');
        Route::get('/proposal-kegiatan-sekretarissmf', fn () => view('role.sekretaris-smf.proposal-kegiatan-sekretarissmf'))->name('proposal-kegiatan-sekretarissmf');
        Route::get('/proposal-kegiatan-sekretarisbpmf', fn () => view('role.sekretaris-bpmf.proposal-kegiatan-sekretarisbpmf'))->name('proposal-kegiatan-sekretarisbpmf');
        Route::get('/proposal-anggaran-sekretarisbpmf', fn () => view('role.sekretaris-bpmf.proposal-anggaran-sekretarisbpmf'))->name('proposal-anggaran-sekretarisbpmf');
        Route::get('/proposal-kegiatan-komisia', fn () => view('role.komisia.proposal-kegiatan-komisia'))->name('proposal-kegiatan-komisia');

        Route::get('/proposal-anggaran', [ProposalAnggaranController::class, 'indexStatus'])->name('proposal-anggaran');
        Route::put('/tentang-anggaran-status/{proposalAnggaran}',[ProposalAnggaranController::class,'setStatus'])->name('tentang-anggaran-status');
        Route::post('/tentang-anggaran-download/{proposalAnggaran}',[ProposalAnggaranController::class, 'download'])->name('tentang-anggaran-download');
    });

    //    SUPER ADMIN
    Route::middleware(['auth:admin', 'can:role,' . '"' . Role::SUPERADMIN . '\''])->group(function () {
        // CRUD ADMIN
        Route::resource('/admin', AdminController::class);
        // TYPE POINT
        Route::get('/type-point', [TypePointController::class, 'index'])->name('type-point.index');
        Route::put('/type-point', [TypePointController::class, 'update'])->name('type-point.update');
        Route::get('/proposalKegiatan', fn () => view('proposal.proposal-kegiatan'))->name('proposal-kegiatan');
        Route::resource('event', EventController::class);
    });

    //    INPOS
    Route::middleware(['auth:admin', 'can:role,' . '"' . Role::INPOS . '\''])->group(function () {
        // DAFTAR-KEGIATAN
        Route::get('/validate-memberprogram', [MemberProgramController::class, 'show']);
        Route::post('/validate-memberprogram', [MemberProgramController::class, 'update']);
        // INPUT POINT
        route::resource('points', pointsController::class);
        // Kegiatan
        Route::get('/daftarKegiatan', 'KegiatanController@index')->name('daftarKegiatan');
        Route::get('/tambahKegiatan', 'KegiatanController@create')->name('tambahKegiatan');
        Route::post('/simpanKegiatan', 'KegiatanController@store')->name('simpanKegiatan');
        Route::get('/editKegiatan/{id}', 'KegiatanController@edit')->name('editKegiatan');
        Route::post('/updateKegiatan/{id}', 'KegiatanController@update')->name('updateKegiatan');
        Route::get('/deleteKegiatan/{id}', 'KegiatanController@destroy')->name('deleteKegiatan');
//        Route::get('/proposalKegiatan', fn () => view('proposal.proposal-kegiatan'))->name('proposal-kegiatan');
//        Route::get('/proposalAnggaran', fn () => view('proposal.proposal-anggaran'))->name('proposal-anggaran');
    });

//    kegiatna
    Route::middleware(['auth:admin', 'can:role,' . '"' . Role::KEGIATAN . '\''])->group(function () {
       Route::get('/tentang-anggaran',[ProposalAnggaranController::class, 'index'])->name('tentang-anggaran');
        Route::post('/tentang-anggaran',[ProposalAnggaranController::class, 'store'])->name('tentang-anggaran');
    });

});

// MAHASISWA
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/home', [pointsController::class, 'detailPoint']);
    Route::get('/user/update-password', fn () => view('auth.mahasiswa.update-password'))->name('update-password-user');
    Route::get('/point/show-user/', [pointsController::class, 'showUserPoint'])->name('points.show.user');
    // DAFTAR-KEGIATAN
    //    Route::get('/registration-program', [MemberProgramController::class, 'index']);
    //    Route::post('/registration-program', [MemberProgramController::class, 'store']);
});
