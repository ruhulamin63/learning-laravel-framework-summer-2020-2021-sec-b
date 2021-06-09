<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $user;

    public function __construct()
    {
        $this->user  = [
            ['id'=>1, 'name'=>'Ruhul','email'=>'email@email.com'],
            ['id'=>2, 'name'=>'abc', 'email'=>'abc@email.com'],
            ['id'=>3, 'name'=>'xyz', 'email'=>'xyz@email.com']
    ];
    }
    public function index(){

        $users= $this->user;

        return view('user.list')->with('userlist', $users);
    }

    public function details($id){
        $data= $this->user;
        return view('user.details')->with('id', $id)
                                   ->with('userlist', $data);
    }
}
