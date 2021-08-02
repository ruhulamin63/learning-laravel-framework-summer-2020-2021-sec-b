<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//=========================================================================

    //Route::get('/register', 'RegisterController@index');
	Route::post('product/add', 'ProductController@store');

//==========================================================================

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
