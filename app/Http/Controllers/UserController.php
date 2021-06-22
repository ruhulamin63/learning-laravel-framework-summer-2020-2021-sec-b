<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){

        $users = User::all();
        return view('user.list')->with('userlist', $users);
    }
// ============================ End index ====================================

    public function details($id){
        $user = User::find($id);
        return view('user.details')->with('user', $user);
    }
// ============================ End Details ====================================

    public function create(){
        return view('user.create');
    }
// ============================ End Create ====================================

    public function insert(Request $req){
        $users = new User;
        
        $users->username = $req->uname;
        $users->name = $req->name;
        $users->password = $req->password;
        $users->email = $req->email;
        $users->type = $req->type;
        $users->save();

        return redirect()->route('user.index');
    }
// ============================ End Insert ====================================

    public function edit($id){

        $users= User::find($id);
        return view('user.edit')->with('user', $users);
    }
// ============================ End Edit ====================================

    public function update(Request $req, $id){
        $users = User::find($id);
        
        $users->username = $req->uname;
        $users->name = $req->name;
        // if($users->password != $req->password){
        //     $users->password = $req->password;
        // }
        $users->email = $req->email;
        $users->type = $req->type;
        $users->save();

        return redirect()->route('user.index');
    }
// ============================ End Update ====================================

    public function delete($id){
        //confirm window
        //find user by id $user
        $users = $this->getUserList();
        
        $user = '';
        foreach($users as $u){
            if($u['id'] == $id){
                $user = $u;
                break;
            }
        }
        return view('user.delete')->with('user', $user);
    }
// ============================ End Delete ====================================

    public function destroy($id){
        //remove user form list
        //create new list & display
             
        $users = $this->getUserList();
        $new_users = [];
        foreach($users as $u){
            if($u['id'] != $id){
                array_push($new_users,$u);
            }
        }
        return view('user.list')->with('userlist', $new_users);
    }
// ============================ End Destroy ====================================

    public function getUserList(){
        return [
            ['id'=>1, 'name'=>'Ruhul', 'email'=>'email@email.com'],
            ['id'=>2, 'name'=>'abc', 'email'=>'abc@email.com'],
            ['id'=>3, 'name'=>'xyz', 'email'=>'xyz@email.com']
        ];
    }
//}
// ============================ End getUserList ==================================

    // public function test(){
    //     session()->put('uname','Ruhul Amin');
    //     session()->put('password','123');
        
    //     $uname = session()->get('uname');
    //     $password = session()->get('password');
    //     $alldata = session()->all();

    //     session()->forget('uname');
    //     session()->flush();
    //     $uname = session()->has('uname');
    //     $uname = session()->pull($alldata);

    //     session()->flash('cgpa','4');
    //     session()->flash('dept','cse');

    //     $cgpa = session()->get('cgpa');

    //     $uname = session()->keep('cgpa');
    //     session()->reflash();

    //     return view('login.test')->with('data', $uname);
    // }
// =====================================================================================================


}
