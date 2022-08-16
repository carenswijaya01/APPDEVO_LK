<?php

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
    return view('form-daftar-kepanitiaan');
});

Route::get('/lk-poin', function () {
    return view('/superadmin/lk-poin');
});

Route::get('/lk-adminlist', function () {
    return view('/superadmin/lk-adminlist');
});

Route::get('/lk-superadmin', function () {
    return view('/superadmin/lk-superadmin');
});

Route::get('/lk-tambahadmin', function () {
    return view('/superadmin/lk-tambahadmin');
});

Route::get('/login', function () {
    return view('/loginpage/login');
});

Route::get('/login_adm', function () {
    return view('/loginpage/login_adm');
});

Route::get('/regis', function () {
    return view('/loginpage/regis');
});

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

Route::get('/admin-list-kepanitiaan', function () {
    return view('admin/listKepanitiaan');
});

Route::get('/admin-validasi', function () {
    return view('admin/Validasi');
});

Route::get('/form-pendaftaran', function () {
    return view('form-pendaftaran');
});


