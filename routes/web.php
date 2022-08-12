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

Route::get('/AdminPengumuman', function () {
    return view('/admin/AdminPengumuman');
});

Route::get('/EditPengumuman', function () {
    return view('/admin/EditPegumuman');
});

Route::get('/InputPoin', function () {
    return view('/admin/InputPoin');
});

Route::get('/Kepanitiaan', function () {
    return view('/admin/Kepanitiaan');
});

Route::get('/poin', function () {
    return view('/admin/poin');
});


