<?php

namespace App\Http\Controllers;
use App\Models\Agent;
use Illuminate\Support\Facades\DB; //Import query builser 

use Illuminate\Http\Request;
//Ruhul Amin
class AgentController extends Controller
{
    public function index()
    {
        $users= Agent::all(); //change Officer to (Agent)->tablename

        //$users = Officer::orderBy('id','DESC')->get(); //change Officer to (Agent)->tablename

        return view('pages.officer.agent.index')->with('users', $users);
    }
    // ============================ End Index ====================================

    public function details($email)
    {
        $users= Agent::find($email); //change Officer to (Agent)->tablename

        //$users = Officer::orderBy('id','DESC')->get(); //change Officer to (Agent)->tablename

        return view('pages.officer.agent.details')->with('users', $users);
    }

//===============================================================

    public function edit($id){

        $users= Agent::find($id);

        return view('pages.officer.agent.edit')->with('user', $users);
    }
// ============================ End Edit ====================================

    public function update(Request $req, Agent $id)
    {
        $users = Agent::find($id);
        
        $users->name = $req->name;
        // if($users->password != $req->password){
        //     $users->password = $req->password;
        // }
        $users->phone = $req->phone;
        $users->nid = $req->nid;
        $users->dob = $req->dob;
        $users->type = $req->type;

        $users->save();
        
        // $results->save();
        // return response()->json($results);

        return redirect()->route('agent_index');
    }

    // ============================ End Update ====================================

    public function delete($id){
  
        $users = Agent::find($id); //change model name
        
        return view('pages.officer.agent.delete')->with('user', $users);
    }
// ============================ End Delete ====================================

    public function destroy($id){

        $users = Agent::find($id);
        $users->delete();

         return redirect()->route('agent_delete');
    }
// ============================ End Destroy ====================================
}
