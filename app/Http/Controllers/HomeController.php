<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $req){
        // $name='Ruhul';
        // return view('home.index', compact('name'));
        // return view('home.index', ['name'=>'Ruhul','id'=>'12']);

        if($req->session()->has('uname')){
            return view('home.index')
                        ->with('name','Amin')
                        ->with('id','34');
        }else{
            $req->session()->flash('msg','Invalid User...');
            return redirect('/login');
        }
    }
}
