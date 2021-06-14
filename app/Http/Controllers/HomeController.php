<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $req){
        // $name='Ruhul';
        // return view('home.index', compact('name'));
        // return view('home.index', ['name'=>'Ruhul','id'=>'12']);

        return view('home.index');
    }
}
