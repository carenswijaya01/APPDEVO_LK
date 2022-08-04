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
    return view('welcome');
});

// Mahasiswa
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/home', fn() => view('home'));
    Route::get('/user/update-password', fn() => view('auth.mahasiswa.update-password'))->name('update-password-user');
});
