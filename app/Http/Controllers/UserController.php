<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = $this->getUserList();
        return view('user.list')->with('userlist', $users);
    }
// ============================ End index ====================================

    public function details($id){
        $users = $this->getUserList();
        $user = '';
        foreach($users as $u){
            if($u['id'] == $id){
                $user = $u;
                break;
            }
        }
        return view('user.details')->with('user', $user);
    }
// ============================ End Details ====================================

    public function create(){
        return view('user.create');
    }
// ============================ End Create ====================================

    public function insert(Request $req){
        $users = $this->getUserList();

        $user = ['id'=>$req->id, 'name'=>$req->uname, 'email'=>$req->email];
        array_push($users, $user);

        return view('user.list')->with('userlist', $users);
    }
// ============================ End Insert ====================================

    public function edit($id){
        //find user by id from userlist $user

        $users=$this->getUserList();

        $user = '';
        foreach($users as $u){
            if($u['id'] == $id){
                $user = $u;
                break;
            }
        }
        return view('user.edit')->with('user', $user);
    }
// ============================ End Edit ====================================

    public function update(Request $req, $id){
        //craete new user array & add to list
        //new userList

        $users = $this->getUserList();

        for($i=0; $i<sizeof($users); $i++){
            if($users[$i]['id'] == $id){

                $users[$i]['id'] = $req->id;
                $users[$i]['name'] = $req->uname;
                $users[$i]['email'] = $req->email;
                break;
            }
        } 
        return view('user.list')->with('userlist', $users);
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
}
// ============================ End getUserList ==================================