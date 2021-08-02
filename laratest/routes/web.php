<?php

use Illuminate\Support\Facades\Route;


Route::get('/home', function () {
    //echo "Welcome Ruhul Amin";

    return view('home');
});

Route::get('/login', function () {
    //echo "Welcome Ruhul Amin";

    return view('/login');
});

// Route::get('product/add', 'ProductController@store');
// Route::post('product/add', 'ProductController@store');
