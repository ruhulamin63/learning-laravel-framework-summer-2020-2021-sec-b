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

    return view('Welcome');
});

Route::get('/home', function () {
    //echo "Welcome Ruhul Amin";

    return view('home');
});

Route::get('/login', ['uses'=>'LoginController@index']);
Route::post('/login', ['uses'=>'LoginController@verify']);

Route::get('/home', ['uses'=>'HomeController@index']);
Route::get('/logout', ['uses'=>'LogoutController@index']);

Route::get('/user/list', ['uses'=>'UserController@index']);

Route::get('/user/insert/{id}', ['uses'=>'UserController@insert']);