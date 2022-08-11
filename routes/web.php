<?php

use App\Http\Controllers\pointsController;
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

//Route::get('/points', function () {
//    return view('points');
//});
Route::get('/controllers/points', function () {
    return view('points');
});
//route::get('/post','PoitsController@post');
//route::get('/post/create','PointsController@create');
//route::get('/post','PointsController@store');
//route::get('/post/{id}','PointsController@store');
//route::get('/post/{id}/edit','PointsController@edit');
//route::get('/post/{id}','PointsController@update');
//route::get('/post/{id}','PointsController@destroy');

route::resource('/points',pointsController::class);
//route::get('/points','PointsController@index');
//route::get('points','PointsController@index');
Route::get('/index', function () {
    return view('index');
});




