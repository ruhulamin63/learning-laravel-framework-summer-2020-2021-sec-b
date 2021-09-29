<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerApi extends Controller
{
    public function customers(){
        $user = Customer::get();
        return response()->json($user, 200);
    }

    public function create(Request $req){

        $users  = new Customer;

        $users->name = $req->name;
        $users->phone = $req->phone;
        $users->nid = $req->nid;
        $users->dob = $req->dob;
        $users->type = $req->type;

        $users->save();
        return response()->json($users, 200);
    }

    public function edit($id){
        $users  = Customer::find($id);
        return response()->json($users, 200);
    }

    public function update(Request $req, $id){

        $users  = Customer::find($id);

        $users->name = $req->name;
        $users->phone = $req->phone;
        $users->nid = $req->nid;
        $users->dob = $req->dob;
        $users->type = $req->type;

        $users->save();
        return response()->json($users, 200);
    }

    public function delete($id){

        $user  = Customer::find($id);
        $user->Delete();

        return response(200);
    }
}
