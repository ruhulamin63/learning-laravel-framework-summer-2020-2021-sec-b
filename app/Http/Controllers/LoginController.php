<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        // echo "Hello Ruhul Amin";

        return view('login.index');
    }

    public function verify(Request $req){
        //dd($req); //this line for debug for this code
        
        if($req->uname == $req->password){
            $req->session()->put('uname',$req->uname);
            return redirect('/home');
        }else{
            $req->session()->flash('msg','Invalide username or password ?');
            return redirect('/login');
        } 
    }
}
