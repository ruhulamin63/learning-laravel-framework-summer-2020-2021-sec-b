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

Route::get('/user/create', 'UserController@create');
Route::post('/user/create', 'UserController@insert');

Route::get('/user/details/{id}', 'UserController@details');

Route::get('/user/edit/{id}', 'UserController@edit');
Route::post('/user/edit/{id}', 'UserController@update');

Route::get('/user/delete/{id}', 'UserController@delete');
Route::post('/user/delete/{id}', 'UserController@destroy');