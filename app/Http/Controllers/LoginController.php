<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests\UserRequest;
use App\Models\User;

class LoginController extends Controller
{
    public function index(){
        // echo "Hello Ruhul Amin";

        return view('login.index');
    }

    public function verify(UserRequest $req){
        //dd($req); //this line for debug for this code
        
        // $req->validate(['uname'=>'required','password'=>'required|min:8'])->validate();
        // $this->validate($req, ['uname'=>'required','password'=>'required|min:8'])->validate();
        // $Validation = Validator::make($req->all(), ['uname'=>'required','password'=>'required|min:8']);

        // if($Validation->fails()){
        //     return back()->with('errors',$Validation->errors());
        //     return redirect()->route('login.index')
        //                                 ->with('errors',$Validation->errors());
        //                                 ->withInput();
        // }
        
        $user = User::where('username',$req->uname)
            ->where('password',$req->password)
            ->first();
            
        if($user){
            $req->session()->put('uname',$req->uname);
            return redirect('/home');
        }else{
            $req->session()->flash('msg','Invalide username or password ?');
            return redirect('/login');
        } 
    }
}
