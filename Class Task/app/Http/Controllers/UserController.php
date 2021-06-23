<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB; //Import query builser 

class UserController extends Controller
{
    public function index(){

        // $users = User::all();
        $users = DB::table('users')->get(); //Query Builder

        return view('user.list')->with('userlist', $users);
    }
// ============================ End index ====================================

    public function details($id){

        $user = User::find($id); // Model Query

        return view('user.details')->with('user', $user);
    }
// ============================ End Details ====================================

    public function create(){
        return view('user.create');
    }
// ============================ End Create ====================================

    public function insert(Request $req){

         $users = new User;
        
        // if($req->hasFile('image')){
        //     $file = $req->file('image');

        //     echo "File Name : ".$file->getClientOriginalName()."<br>";
        //     echo "File Extension : ".$file->getClientOriginalExtension()."<br>";
        //     echo "File Mime Type : ".$file->getMimeType()."<br>";
        //     echo "File Size : ".$file->getSize()."<br>";
        // }

        $file = $req->file('image');
        if($file->move('upload', $file->getClientOriginalName())){
            
            $users->image = $req->image;

        }else{
            echo "Error...";
        }

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
  
        $users = User::find($id);
        
        return view('user.delete')->with('user', $users);
    }
// ============================ End Delete ====================================

    public function destroy($id){

        $users = User::find($id);
        $users->delete();

         return redirect()->route('user.delete');
    }
// ============================ End Destroy ====================================

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
