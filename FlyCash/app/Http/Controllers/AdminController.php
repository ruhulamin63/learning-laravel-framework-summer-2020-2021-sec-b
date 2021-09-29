<?php

namespace App\Http\Controllers;

use App\Models\campaign;
use Validator;
use App\Models\Agent;
use App\Models\Agentstransaction;
use App\Models\Admin;
use App\Models\Loginuser;
use App\Models\customerstransactions;

use App\Http\Requests\RegisterRequest;
use App\Http\Requests\TransactionRequest;
use App\Models\Customer;


use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\View\View
     */
    public function addagent()
    {
        return view('pages.admin.agent.addagent');

    }

    public function insertagent (RegisterRequest $req)
    {
        $agent = new Agent;
        $agent->name = $req->name;
        $agent->email = $req->email;
        $agent->password = $req->password;
        $agent->transaction_status = 1;
        $agent->phone = $req->phone;
        $agent->nid = $req->nid;
        $agent->dob = $req->dob;
        $agent->type = "agent";
        //$user->user_type = "active";
        $agent->balance = 20;
        $agent->save();


                    return view('pages.admin.agent.addagent');


    }

    public function editagent()
    {
        return view('pages.admin.agent.editagent');
    }
    public function agenttransaction()
    {
        return view('pages.admin.agent.agenttransaction');
    }
    public function addmoney(TransactionRequest $req)
    {
           if ($req->session()->get('password')==$req-> password){

                $email=$req->session()->get('email');
                $balance=$req->session()->get('balance');
                $agent = Agent::where('email',$email)
                ->first();
                $newbalance=$balance+$req-> amount;
                $balance=$newbalance;


                $req->session()->put('balance', $balance);

                $agent->balance = $balance;
                $agent->save();
                $transaction=new Agentstransaction();
                $transaction->phone=$req->phone;
                $transaction->email=$email;
                $transaction->transaction_type="Add Money";
                $transaction->amount=$req->amount;
                $transaction->balance = $balance;
                $transaction->date = now();
                $transaction->save();



                return back()->with('msg','Add Money Successfull') ;

            }else{
                $req->session()->flash('msg', 'Incorrect Password');
                return redirect('/agent-bkash');
            }
   }

    public function chatagent()
    {
        return view('pages.admin.agent.chatagent');
    }
    public function blockagent()
    {
        $agents = Agent ::all();
        return view('pages.admin.agent.blockagent') ->with('agents',$agents);   
     }

    public function addagentmoney()
    {
        return view('pages.admin.agent.addagentmoney');
    }
   
    public function addcampaign()
    {
        return view('pages.admin.campaign.addcampaign');
    }
    public function ongoingcampaign()
    {
        return view('pages.admin.campaign.ongoingcampaign');
    }
    
    public function removecampaign()
    {
        return view('pages.admin.campaign.removecampaign');
    }
    public function addofficer()
    {
        return view('pages.admin.officer.addofficer');
    }
    public function editofficer()
    {
        return view('pages.admin.officer.editofficer');
    }
    public function chatofficer()
    {
        return view('pages.admin.officer.chatofficer');
    }
    public function adduser()
    {
        return view('pages.admin.user.adduser');
    }

    public function insertuser (RegisterRequest $req)
    {
        $customer = new Customer;
        $customer->name = $req->name;
        $customer->email = $req->email;
        $customer->password = $req->password;
        $customer->transaction_status = 1;
        $customer->phone = $req->phone;
        $customer->nid = $req->nid;
        $customer->dob = $req->dob;
        $customer->type = "customer";
        //$user->user_type = "active";
        $customer->balance = 20;
        $customer->save();


        // $loginuser = new Loginuser;
        //             $loginuser->email = $req->email;
        //             $loginuser->password = $req->password;
        //             $loginuser->phone = $req->phone;
        //             $loginuser->nid = $req->nid;
        //             $loginuser->type = "customer";
        //             $loginuser->save();

                    return view('pages.admin.user.adduser');


    }



    public function edituser()
    {
        $customers = Customer ::all();
        return view('pages.admin.user.edituser') ->with('customers',$customers);
    }
    public function transaction(Request $req)
    {
        $email=$req->session()->get('email');
        $transaction = customerstransactions::all();

        return view('pages.admin.user.transaction')->with('transaction',$transaction);
    }
    public function transactionlist()
    {
        return view('pages.admin.user.transaction');

    }

    public function discount()
    {
        return view('pages.admin.user.discount');
    }
    public function blockuser()
    {
        $customers = Customer ::all();

        return view('pages.admin.user.blockuser') ->with('customers',$customers);
    }
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
}
