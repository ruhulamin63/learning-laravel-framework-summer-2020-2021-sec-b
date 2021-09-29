<?php

namespace App\Http\Controllers;
use Validator;
use App\Http\Requests\TransactionRequest;
use App\Models\Agentstransactions;
use App\Models\Agent;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;

class AgentTransactionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
        // Route::get('cashin', ['as' => 'pages.transaction.cashin', 'uses' => 'App\Http\Controllers\transactionController@cashin']);
		// Route::get('cashout', ['as' => 'pages.transaction.cashin', 'uses' => 'App\Http\Controllers\transactionController@cashout']);
		// Route::get('requestmoney', ['as' => 'pages.transaction.cashin', 'uses' => 'App\Http\Controllers\transactionController@requestmoney']);
		// Route::get('paybill', ['as' => 'pages.transaction.cashin', 'uses' => 'App\Http\Controllers\transactionController@paybill']);
		// Route::get('bkash', ['as' => 'pages.transaction.cashin', 'uses' => 'App\Http\Controllers\transactionController@bkash']);
		// Route::get('nagad', ['as' => 'pages.transaction.cashin', 'uses' => 'App\Http\Controllers\transactionController@nagad']);
		// Route::get('rocket', ['as' => 'pages.transaction.cashin', 'uses' => 'App\Http\Controllers\transactionController@rocket']);
		// Route::get('upay', ['as' => 'pages.transaction.cashin', 'uses' => 'App\Http\Controllers\transactionController@upay']);
		// Route::get('surecash', ['as' => 'pages.transaction.cashin', 'uses' => 'App\Http\Controllers\transactionController@surecash']);
		// Route::get('bankcard', ['as' => 'pages.transaction.cashin', 'uses' => 'App\Http\Controllers\transactionController@bankcard']);
    
    public function cashin()
    {
        return view('pages.agent.transaction.cashin');
    }
    public function cashout()
    {
        return view('pages.agent.transaction.cashout');
    }
    public function requestmoney()
    {
        return view('pages.agent.transaction.requestmoney');
    }
    public function paybill()
    {
        return view('pages.agent.transaction.paybill');
    }
    public function bkash()
    {
        return view('pages.agent.transaction.bkash');
    }
    public function nagad()
    {
        return view('pages.agent.transaction.nagad');
    }
    public function rocket()
    {
        return view('pages.agent.transaction.rocket');
    }
    public function upay()
    {
        return view('pages.agent.transaction.upay');
    }
    public function surecash()
    {
        return view('pages.agent.transaction.surecash');
    }
    public function bankcard()
    {
        return view('pages.agent.transaction.bankcard');
    }
    public function recharge()
    {
        return view('pages.agent.transaction.recharge');
    }
    public function addmoney()
    {
        return view('pages.agent.addmoney');
    }
    public function transactionlist()
    {
        return view('pages.agent.transactionlist');
    }
    public function notifications()
    {
        return view('pages.notifications');
    }
    public function upgrade()
    {
        return view('pages.upgrade');
    }
    public function feedback()
    {
        return view('pages.agent.feedback');
    }
    public function adduser()
    {
        return view('pages.agent.adduser');
    }
    public function view()
    {
        return view('pages.agent.view');
    }
    public function chat()
    {
        return view('pages.agent.chat');
    }

    //==========================Officers Block=============================================

    public function agentblocked(Agent $id){

        //dd($email);
        $update =  DB::table('Agent')
        ->where('id', $id)
        ->update([
            'transaction_status' => 'blocked',
        ]);
    
        if ($update){

            return back()->with('msg','Agent Transaction Blocked') ;

        }else{
            return back()->with('msg','Database Problem') ;

        }
    }

    public function agentunblocked(Agent $id){
        
        //dd($email);
        $update =  DB::table('Agent')
        ->where('id', $id)
        ->update([
            'transaction_status' => 'unblocked',
        ]);
    
        if ($update){

            return back()->with('msg','Agent Transaction Unlocked') ;

        }else{
            return back()->with('msg','Database Problem') ;

        } 
    }

    public function agent_transaction_details(Agentstransactions $id){
        
        $users= Agentstransactions::find($id); //change Officer to (Customer)->tablename

        return view('pages.officer.agent.agent_transaction')->with('user', $users);
    }

    public function pdf($id){

        $user = Agentstransactions::find($id); // Model Query

        $pdf = PDF::loadView('pages.officer.pdf.agent_invoice',compact('user'));
        return $pdf->stream('invoice.pdf');
    }

//==========================End Officer Block==========================================

    
}
