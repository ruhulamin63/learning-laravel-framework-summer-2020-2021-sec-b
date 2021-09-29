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
    return view('welcome') ;
})->name('welcome');

 Route::get('/customer-home', 'App\Http\Controllers\HomeController@customer')->name('customer_home')->middleware('checkSession');
 Route::get('/agent-home', 'App\Http\Controllers\HomeController@agent')->name('agent_home')->middleware('checkSession');
 Route::get('/admin-home', 'App\Http\Controllers\HomeController@admin')->name('admin_home')->middleware('checkSession');
 Route::get('/officer-home', 'App\Http\Controllers\HomeController@officer')->name('officer_home')->middleware('checkSession');
Route::get('/login', ['uses'=> 'App\Http\Controllers\LoginController@login'])->name('login');
Route::post('/login', ['uses'=> 'App\Http\Controllers\LoginController@verify']);
Route::get('/register', ['uses'=> 'App\Http\Controllers\RegisterController@register'])->name('register.index');
Route::post('/register', ['uses'=> 'App\Http\Controllers\RegisterController@insert'])->name('register.insert');
Route::get('/forgotpassword', ['uses'=> 'App\Http\Controllers\ForgotPasswordController@login'])->name('password.request');

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/addmoney', [App\Http\Controllers\CustomerCustomerTransactionController::class, 'addmoney'])->name('addmoney');




Route::get('/logout','App\Http\Controllers\LogoutController@logout');

Route::group(['middleware' => 'checkSession'], function () {

	//Route::get('profile', [ 'uses' => 'App\Http\Controllers\ProfileController@edit'])->name('profile_edit');
	
	//Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	//Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);

		Route::group(['middleware' => 'customer'], function () {

			Route::group(['middleware' => 'transCheck'], function () {
				Route::get('/customer-addmoney', ['uses' => 'App\Http\Controllers\CustomerTransactionController@addmoney'])->name('customer_addmoney');
				Route::post('/customer-addmoney', ['uses' => 'App\Http\Controllers\CustomerTransactionController@addmoneydone']);

			Route::get('/customer-sendmoney', [ 'uses' => 'App\Http\Controllers\CustomerTransactionController@sendmoney'])->name('customer_sendmoney');
			Route::post('/customer-sendmoney', [ 'uses' => 'App\Http\Controllers\CustomerTransactionController@sendmoneydone']);

			Route::get('/customer-cashout', [ 'uses' => 'App\Http\Controllers\CustomerTransactionController@cashout'])->name('customer_cashout');
			Route::post('/customer-cashout', [ 'uses' => 'App\Http\Controllers\CustomerTransactionController@cashoutdone']);

			Route::get('/customer-paybill', [ 'uses' => 'App\Http\Controllers\CustomerTransactionController@paybill'])->name('customer_paybill');
			Route::post('/customer-paybill', [ 'uses' => 'App\Http\Controllers\CustomerTransactionController@paybilldone']);

			Route::get('/customer-recharge', [ 'uses' => 'App\Http\Controllers\CustomerTransactionController@recharge'])->name('customer_recharge');
			Route::post('/customer-recharge', [ 'uses' => 'App\Http\Controllers\CustomerTransactionController@rechargedone']);

			Route::get('/customer-donate', [ 'uses' => 'App\Http\Controllers\CustomerTransactionController@donate'])->name('customer_donation');
			Route::post('/customer-donate', [ 'uses' => 'App\Http\Controllers\CustomerTransactionController@donatedone']);

			Route::get('/customer-transfermoney', [ 'uses' => 'App\Http\Controllers\CustomerTransactionController@transfermoney'])->name('customer_transfermoney');
			Route::post('/customer-transfermoney', [ 'uses' => 'App\Http\Controllers\CustomerTransactionController@transfermoneydone']);


			});

			

			
		
			Route::get('/profile', [ 'uses' => 'App\Http\Controllers\CustomerController@editCustomer'])->name('profile_edit');

		//Route::get('/profile', [ 'uses' => 'App\Http\Controllers\CustomerController@editCustomer'])->name('profile_edit')->middleware('checkSession');
		Route::get('/change-password', [ 'uses' => 'App\Http\Controllers\CustomerController@changeCustomerPassword'])->name('profile_passwordChange');
		Route::get('/profile-edit', [ 'uses' => 'App\Http\Controllers\CustomerController@editCustomerProfile'])->name('customer_profile_edit');
		Route::put('/changed-password', [ 'uses' => 'App\Http\Controllers\CustomerController@changeCustomerPasswordDone']);

		
});
	
	});
		Route::group(['middleware' => 'agent'], function () {
		
		
		
		Route::get('/agent-cashin', ['uses' => 'App\Http\Controllers\AgentTransactionController@cashin'])->name('agent_cashin');
		Route::get('/agent-cashout', ['uses' => 'App\Http\Controllers\AgentTransactionController@cashout'])->name('agent_cashout');
		Route::get('/agent-requestmoney', ['uses' => 'App\Http\Controllers\AgentTransactionController@requestmoney'])->name('agent_requestmoney');
		Route::get('/agent-paybill', ['uses' => 'App\Http\Controllers\AgentTransactionController@paybill'])->name('agent_paybill');
		Route::get('/agent-bkash', ['uses' => 'App\Http\Controllers\AgentTransactionController@bkash'])->name('agent_bkash');
		Route::get('/agent-nagad', ['uses' => 'App\Http\Controllers\AgentTransactionController@nagad'])->name('agent_nagad');
		Route::get('/agent-rocket', ['uses' => 'App\Http\Controllers\AgentTransactionController@rocket'])->name('agent_rocket');
		Route::get('/agent-upay', ['uses' => 'App\Http\Controllers\AgentTransactionController@upay'])->name('agent_upay');
		Route::get('/agent-surecash', ['uses' => 'App\Http\Controllers\AgentTransactionController@surecash'])->name('agent_surecash');
		Route::get('/agent-bankcard', ['uses' => 'App\Http\Controllers\AgentTransactionController@bankcard'])->name('agent_bankcard');
		Route::get('/agent-recharge', ['uses' => 'App\Http\Controllers\AgentTransactionController@recharge'])->name('agent_recharge');
		
		Route::get('/agent-addmoney', ['uses' => 'App\Http\Controllers\AgentTransactionController@addmoney'])->name('agent_addmoney');
		Route::get('/agent-view', ['uses' => 'App\Http\Controllers\AgentTransactionController@view'])->name('agent_view');
		Route::get('/agent-chat', ['uses' => 'App\Http\Controllers\AgentTransactionController@chat'])->name('agent_chat');
		Route::get('/agent-adduser', ['uses' => 'App\Http\Controllers\AgentTransactionController@adduser'])->name('agent_adduser');
		Route::get('/agent-feedback', ['uses' => 'App\Http\Controllers\AgentTransactionController@feedback'])->name('agent_feedback');
		Route::get('/agent-transactionlist', ['uses' => 'App\Http\Controllers\AgentTransactionController@transactionlist'])->name('agent_transactionlist');
		Route::get('/agent-upgrade', ['uses' => 'App\Http\Controllers\AgentTransactionController@upgrade'])->name('agent_upgrade');

		Route::get('maps', ['as' => 'pages.maps', 'uses' => 'App\Http\Controllers\PageController@maps']);
		Route::get('notifications', ['as' => 'pages.notifications', 'uses' => 'App\Http\Controllers\PageController@notifications']);
		Route::get('rtl', ['as' => 'pages.rtl', 'uses' => 'App\Http\Controllers\PageController@rtl']);
		Route::get('typography', ['as' => 'pages.typography', 'uses' => 'App\Http\Controllers\PageController@typography']);

	});
	

		Route::group(['middleware' => 'admin'], function () {

			Route::get('/admin-adduser', ['uses' => 'App\Http\Controllers\AdminController@adduser'])->name('admin_adduser');
			Route::post('/admin-adduser', ['uses' => 'App\Http\Controllers\AdminController@insertuser'])->name('admin_insertuser');
	
			Route::get('/admin-edituser', ['uses' => 'App\Http\Controllers\AdminController@edituser'])->name('admin_edituser');
			Route::get('/admin-transaction', ['uses' => 'App\Http\Controllers\AdminController@transaction'])->name('admin_transaction');
			Route::get('/admin-discount', [ 'uses' => 'App\Http\Controllers\AdminController@discount'])->name('admin_discount');
			Route::get('/admin-blockuser', ['uses' => 'App\Http\Controllers\AdminController@blockuser'])->name('admin_blockuser');
			Route::get('/admin-blockeduser/{email}', ['uses' => 'App\Http\Controllers\AdminController@userblocked'])->name('admin_userblocked');
			Route::get('/admin-unblockuser/{email}', ['uses' => 'App\Http\Controllers\AdminController@userunblocked'])->name('admin_userunblocked');
	
			Route::get('/admin-addagent', ['uses' => 'App\Http\Controllers\AdminController@addagent'])->name('admin_addagent');
			Route::post('/admin-addagent', ['uses' => 'App\Http\Controllers\AdminController@insertagent'])->name('admin_insertagent');
	
			Route::get('/admin-editagent', ['uses' => 'App\Http\Controllers\AdminController@editagent'])->name('admin_editagent');
			Route::get('/admin-agenttransaction', ['uses' => 'App\Http\Controllers\AdminController@agenttransaction'])->name('admin_agenttransaction');
			Route::post('/admin-agenttransaction', ['uses' => 'App\Http\Controllers\AdminController@addmoney']);
	
			Route::get('/admin-addagentmoney', ['uses' => 'App\Http\Controllers\AdminController@addagentmoney'])->name('admin_addagentmoney');
			Route::get('/admin-blockagent', ['uses' => 'App\Http\Controllers\AdminController@blockagent'])->name('admin_blockagent');
			Route::get('/admin-chatagent', ['uses' => 'App\Http\Controllers\AdminController@chatagent'])->name('admin_chatagent');
	
	
			Route::get('/admin-addofficer', ['uses' => 'App\Http\Controllers\AdminController@addofficer'])->name('admin_addofficer');
			Route::get('/admin-editofficer', ['uses' => 'App\Http\Controllers\AdminController@editofficer'])->name('admin_editofficer');
			Route::get('/admin-chatofficer', ['uses' => 'App\Http\Controllers\AdminController@chatofficer'])->name('admin_chatofficer');
	
			Route::get('/admin-addcampaign', ['uses' => 'App\Http\Controllers\AdminController@addcampaign'])->name('admin_addcampaign');
			Route::post('/admin-addcampaign', ['uses' => 'App\Http\Controllers\AdminController@storecampaign'])->name('admin_addcampaign');
	
			Route::get('/admin-ongoingcampaign', ['uses' => 'App\Http\Controllers\AdminController@ongoingcampaign'])->name('admin_ongoingcampaign');
			Route::get('/admin-removecampaign', ['uses' => 'App\Http\Controllers\AdminController@removecampaign'])->name('admin_removecampaignview');
			Route::get('/admin-removecampaign/{id}', ['uses' => 'App\Http\Controllers\AdminController@destroy'])->name('admin_removecampaign');
	
	
	});
	Route::get('/admin-ongoingcampaign', ['uses' => 'App\Http\Controllers\AdminController@ongoingcampaign'])->name('admin_ongoingcampaign');



//==================================Start Officer Route================================================

	Route::group(['middleware' => 'officer'], function () {

	//============================================Start Agent Routing===================================================

		Route::get('/pages/officer/agent/index','App\Http\Controllers\AgentController@index')->name('agent_index');

		Route::get('/agent-details/{email}','App\Http\Controllers\AgentController@details')->name('agent_details');

		Route::get('/agent-edit/{id}', 'App\Http\Controllers\AgentController@edit')->name('agent_edit');
		Route::post('/agent-edit/{id}', 'App\Http\Controllers\AgentController@update');

		// Route::get('/pages/officer/agent/delete/{id}', 'App\Http\Controllers\AgentController@delete');
		// Route::post('/pages/officer/agent/delete/{id}', 'App\Http\Controllers\AgentController@destroy')->name('agent_delete');

		Route::get('/agent-blockeduser/{id}', 'App\Http\Controllers\AgentTransactionController@agentblocked')->name('agent_blockeduser');
		Route::get('/agent-unblockuser/{id}', 'App\Http\Controllers\AgentTransactionController@agentunblocked')->name('agent_unblockeduser');

		Route::get('/agent-transaction/{id}', 'App\Http\Controllers\AgentTransactionController@agent_transaction_details')->name('agent_transaction');
		// Route::post('/agent-transaction/{id}', 'App\Http\Controllers\AgentTransactionController@agent_transaction_details');
		
		// Invoice pdf generator using dompdf
		Route::get('/agent-invoice/{id}','App\Http\Controllers\AgentTransactionController@pdf')->name('agent_invoice');

	//============================================End Agent Routing=======================================
	

	//=======================================Start Customer Routing=========================================

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

	//==========================End Customer Routing========================================
	

	//**********************************Start Information Routing********************************************
		
		// 	Route::get('transection', ['as' => 'transection.tran', 'uses' => 'TranController@tran']);
		// 	Route::get('icons', ['as' => 'pages.icons', 'uses' => 'PageController@icons']);
		// 	Route::get('notifications', ['as' => 'pages.notifications', 'uses' => 'PageController@notifications']);

		//Route::resource('user', 'InfoController');

		Route::get('/pages/officer/information','App\Http\Controllers\InfoController@index')->name('information_index');
		Route::get('/pages/officer/information/details/{id}','App\Http\Controllers\InfoController@details')->name('information_details');

		Route::get('/pages/officer/information/edit/{id}','App\Http\Controllers\InfoController@edit')->name('information_edit');
		Route::post('/pages/officer/information/edit/{id}','App\Http\Controllers\InfoController@update')->name('information_update');
		
		Route::get('/pages/officer/information/delete/{id}','App\Http\Controllers\InfoController@delete');
		// Route::post('/pages/officer/information/delete/{id}','App\Http\Controllers\InfoController@destroy')->name('information_delete');

	//==================================End Information Route================================================


	//=======================================Start Officer Route============================================

		//Route::resource('/pages/officer/profile','OfficerController');

		Route::get('/pages/officer/profile/edit','App\Http\Controllers\OfficerController@edit')->name('profile_edit');		
		Route::post('/pages/officer/profile/edit','App\Http\Controllers\OfficerController@update')->name('profile_update');

		Route::get('/pages/officer/password/password_edit','App\Http\Controllers\OfficerController@PassEdit')->name('pass_edit');
		Route::post('/pages/officer/password/password_edit','App\Http\Controllers\OfficerController@PassUpdate')->name('pass_update');

		// Route::post('/pages/officer/profile','OfficerController@store')->name('image_insert');
		// Route::post('/pages/officer/profile','OfficerController@update');

//===========================================End Officer Route=========================================================

	});
//*****************************************************************************************************************/


		Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
		Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
		Route::get('icons', ['as' => 'pages.icons', 'uses' => 'App\Http\Controllers\PageController@icons']);
		Route::get('maps', ['as' => 'pages.maps', 'uses' => 'App\Http\Controllers\PageController@maps']);
		Route::get('notifications', ['as' => 'pages.notifications', 'uses' => 'App\Http\Controllers\PageController@notifications']);
		Route::get('rtl', ['as' => 'pages.rtl', 'uses' => 'App\Http\Controllers\PageController@rtl']);
		Route::get('transactionlist', ['as' => 'pages.transactionlist', 'uses' => 'App\Http\Controllers\PageController@transactionlist']);
		Route::get('typography', ['as' => 'pages.typography', 'uses' => 'App\Http\Controllers\PageController@typography']);
		Route::get('upgrade', ['as' => 'pages.upgrade', 'uses' => 'App\Http\Controllers\PageController@upgrade']);
		Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);