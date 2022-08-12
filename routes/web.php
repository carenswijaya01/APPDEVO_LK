<?php

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
Route::resource('admin', AdminController::class);

Route::get('/admin-pengumuman', function () {
    return view('admin/AdminPengumuman');
});

Route::get('/admin-input-poin', function () {
    return view('admin/InputPoin');
});

Route::get('/admin-kepanitiaan', function () {
    return view('admin/Kepanitiaan');
});

Route::get('/admin-edit-pengumuman', function () {
    return view('admin/EditPengumuman');
});

Route::get('/admin-poin', function () {
    return view('admin/poin');
});
