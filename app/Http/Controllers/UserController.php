<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = [
            ['id'=>1,'name'=>'abc','email'=>'abc@gmail.com'],
            ['id'=>2,'name'=>'xyz','email'=>'xyz@gmail.com'],
            ['id'=>3,'name'=>'pqr','email'=>'pqr@gmail.com']
        ];

        return view('user.list')->with('userlist', $users);
    }

    public function insert($id){
        echo $id;
    }
}
