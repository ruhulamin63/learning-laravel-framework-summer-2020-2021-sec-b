<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



//=======================================================================

        Route::get('/pages/officer/customer/show','App\Http\Controllers\CustomerController@show')->name('customer_show');

		Route::get('/customer-edit/{id}', 'App\Http\Controllers\CustomerController@edit')->name('customer_edit');
		Route::post('/customer-edit/{id}', 'App\Http\Controllers\CustomerController@update');

		// Route::get('/pages/officer/customer/delete/{id}', 'App\Http\Controllers\CustomerController@delete');
		// Route::post('/pages/officer/customer/delete/{id}', 'App\Http\Controllers\CustomerController@destroy')->name('customer_delete');

		Route::get('/customer-blockeduser/{email}', ['uses' => 'App\Http\Controllers\CustomerTransactionController@userblocked'])->name('customer_userblocked');
		Route::get('/customer-unblockuser/{email}', ['uses' => 'App\Http\Controllers\CustomerTransactionController@userunblocked'])->name('customer_userunblocked');

		Route::get('/customer-transaction/{id}', 'App\Http\Controllers\CustomerTransactionController@customer_transaction_details')->name('customer_transaction');
		// Route::post('/customer-transaction/{id}', 'App\Http\Controllers\CustomerTransactionController@customer_transaction_details');
		
		// Invoice pdf generator using dompdf
		Route::get('/customer-invoice/{email}','App\Http\Controllers\CustomerTransactionController@pdf')->name('customer_invoice');
