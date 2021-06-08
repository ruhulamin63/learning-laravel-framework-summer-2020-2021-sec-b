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

       // echo $req->username;
        
        if($req->username == $req->password){
            return redirect('/home');
        }
    }
}
