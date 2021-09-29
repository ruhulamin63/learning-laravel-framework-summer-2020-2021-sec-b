<?php

namespace App\Http\Controllers;
use Validator;
use App\Http\Requests\TransactionRequest;
use App\Models\Customerstransaction;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;

class CustomerTransactionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */

     
    
    //========================================Add Money=========================================
    
    public function addmoney()
    {
        return view('pages.customer.transaction.addmoney');
    }public function addmoneyDone(TransactionRequest $req)
    {
        if($req-> ammount >100)
        {
            $req->session()->flash('msg', 'hi');
                return redirect('/customer-addmoney');

        }else{
            return back()->with('err','Add money Unsuccessfull') ;
        }
        
    }

    
    //========================================Send Money=========================================
    
    public function sendmoney()
    {
        return view('pages.customer.transaction.sendmoney');
    }
    public function sendmoneyDone(TransactionRequest $req)
    {
        if($req-> ammount >10)
        {
            $req->session()->flash('msg', 'hi');
                return redirect('/customer-addmoney');

        }else{
            return back()->with('err','Send Money Unsuccessfull') ;
        
    }
}

    //========================================Cashout=========================================

    public function cashout()
    {
        return view('pages.customer.transaction.cashout');
    }
   
    public function cashoutdone(TransactionRequest $req)
    {
        if($req-> amount >100)
        {
            $status = Agent::where('phone',$req->phone)
            ->first();
            //dd($status);
            

                if ($req->session()->get('password')==$req-> password){
                    if($status){

                    $email=$req->session()->get('email');
                    $balance=$req->session()->get('balance');
                    $customer = Customer::where('email',$email)
                    ->first();
                    $newbalance=$balance-$req-> amount;
                    $balance=$newbalance;
                
    
                    $req->session()->put('balance', $balance);
    
                    $customer->balance = $balance;
                    $customer->save();
                    $transaction=new Customerstransaction();
                    $transaction->phone=$req->phone;
                    $transaction->email=$email;
                    $transaction->transaction_type="Cash out";
                    $transaction->amount=$req->amount;
                    $transaction->balance = $balance;
                    $transaction->date = now();
                    $transaction->save();
    
    
    
                    return back()->with('msg','Cashout Successfull') ;

                }else{
                    return back()->with('err','Incorrect Agent Number') ;
    
                }
    
                }else{
                    return back()->with('err','Incorrect Password') ;
                }

            
        }else{
            return back()->with('err','Minimum Cashout amount 100 Taka') ;
        }
    }


    //========================================Pay BILl=========================================


    public function paybill()
    {
        return view('pages.customer.transaction.paybill');
    }
    public function paybilldone(TransactionRequest $req)
    {
        if($req-> amount >1)
        {
            

                if ($req->session()->get('password')==$req-> password){
                   

                    $email=$req->session()->get('email');
                    $balance=$req->session()->get('balance');
                    $customer = Customer::where('email',$email)
                    ->first();
                    $newbalance=$balance-$req-> amount;
                    $balance=$newbalance;
                
    
                    $req->session()->put('balance', $balance);
    
                    $customer->balance = $balance;
                    $customer->save();
                    $transaction=new Customerstransaction();
                    $transaction->phone=$req->phone;
                    $transaction->email=$email;
                    $transaction->transaction_type="Payment";
                    $transaction->amount=$req->amount;
                    $transaction->balance = $balance;
                    $transaction->date = now();
                    $transaction->save();
    
    
    
                    return back()->with('msg','Payment Successfull') ;

               
    
                }else{
                    return back()->with('err','Incorrect Password') ;
                }

            
        }else{
            return back()->with('err','Minimum Payment amount 1 Taka') ;
        }

    }

    //========================================recharge=========================================
    public function recharge()
    {
        return view('pages.customer.transaction.recharge');
    } public function rechargedone(TransactionRequest $req)
    {
        if($req-> amount >9)
        {
                if ($req->session()->get('password')==$req-> password){
                   

                    $email=$req->session()->get('email');
                    $balance=$req->session()->get('balance');
                    $customer = Customer::where('email',$email)
                    ->first();
                    $newbalance=$balance-$req-> amount;
                    $balance=$newbalance;
                
    
                    $req->session()->put('balance', $balance);
    
                    $customer->balance = $balance;
                    $customer->save();
                    $transaction=new Customerstransaction();
                    $transaction->phone=$req->phone;
                    $transaction->email=$email;
                    $transaction->transaction_type="Mobile Recharge";
                    $transaction->amount=$req->amount;
                    $transaction->balance = $balance;
                    $transaction->date = now();
                    $transaction->save();
    
    
    
                    return back()->with('msg','Mobile Recharge Successfull') ;

                
    
                }else{
                    return back()->with('err','Incorrect Password') ;
                }

            
        }else{
            return back()->with('err','Minimum Payment amount 10 Taka') ;
        }
    }
    //========================================TransferMoney=========================================
    public function transfermoney()
    {
        return view('pages.customer.transaction.transfermoney');
    }
    public function transfermoneydone(TransactionRequest $req)
    {
        if($req-> amount >1000)
        {
                if ($req->session()->get('password')==$req-> password){
                   

                    $email=$req->session()->get('email');
                    $balance=$req->session()->get('balance');
                    $customer = Customer::where('email',$email)
                    ->first();
                    $newbalance=$balance-$req-> amount;
                    $balance=$newbalance;
                
    
                    $req->session()->put('balance', $balance);
    
                    $customer->balance = $balance;
                    $customer->save();
                    $transaction=new Customerstransaction();
                    $transaction->phone=$req->phone;
                    $transaction->email=$email;
                    $transaction->transaction_type="Money Transfer";
                    $transaction->amount=$req->amount;
                    $transaction->balance = $balance;
                    $transaction->date = now();
                    $transaction->save();
    
    
    
                    return back()->with('msg','Money Transfer Successfull') ;

                
    
                }else{
                    return back()->with('err','Incorrect Password') ;
                }

            
        }else{
            return back()->with('err','Minimum Money Transfer amount 1000 Taka') ;
        }
    }
    public function donate()
    {
        return view('pages.customer.transaction.donate');
    }
    public function donatedone(TransactionRequest $req)
    {
        if($req-> amount >1)
        {
            

                if ($req->session()->get('password')==$req-> password){
                   

                    $email=$req->session()->get('email');
                    $balance=$req->session()->get('balance');
                    $customer = Customer::where('email',$email)
                    ->first();
                    $newbalance=$balance-$req-> amount;
                    $balance=$newbalance;
                
    
                    $req->session()->put('balance', $balance);
    
                    $customer->balance = $balance;
                    $customer->save();
                    $transaction=new Customerstransaction();
                    $transaction->phone=$req->billtype;
                    $transaction->email=$email;
                    $transaction->transaction_type="Donate";
                    $transaction->amount=$req->amount;
                    $transaction->balance = $balance;
                    $transaction->date = now();
                    $transaction->save();
    
    
    
                    return back()->with('msg','Donation Successfull') ;

               
    
                }else{
                    return back()->with('err','Incorrect Password') ;
                }

            
        }else{
            return back()->with('err','Minimum Donation amount 1 Taka') ;
        }

    }
//==========================Officers Block=============================================

    public function userblocked($email)
    {
        
        //dd($email);
        $update =  DB::table('customers')
        ->where('email', $email)
        ->update([
            'transaction_status' => 'blocked',
        ]);
    
        if ($update)
        {
            return back()->with('msg','User transaction Blocked') ;

        }else{
            return back()->with('msg','Database Problem') ;

        }
    }

    public function userunblocked($email)
    {
        
        //dd($email);
        $update =  DB::table('customers')
        ->where('email', $email)
        ->update([
            'transaction_status' => 'unblocked',
        ]);
    
        if ($update)
        {
            return back()->with('msg','User transaction Unlocked') ;

        }else{
            return back()->with('msg','Database Problem') ;

        }
        
    }

    public function customer_transaction_details(Customerstransaction $id){
        
        $users= Customerstransaction::find($id); //change Officer to (Customer)->tablename

        return view('pages.officer.customer.customer_transaction')->with('user', $users);
    }

    public function pdf($email){

        $user = Customerstransaction::find($email); // Model Query

        $pdf = PDF::loadView('pages.officer.pdf.customer_invoice',compact('user'));
        return $pdf->stream('invoice.pdf');
    }

//==========================End Officer Block==========================================

}
