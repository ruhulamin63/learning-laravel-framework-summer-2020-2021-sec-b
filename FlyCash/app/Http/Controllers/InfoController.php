<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agentstransactions; // I will change table name
use Illuminate\Support\Facades\DB; //Import query builser 
use Barryvdh\DomPDF\Facade as PDF;
//Ruhul Amin

class InfoController extends Controller
{
    public function index(){

        $users = Agentstransactions::all();
        //$users = DB::table('agentstransactions')->get(); //Query Builder

        return view('pages.officer.information.index')->with('userlist', $users);
    }

// ============================ End Index ====================================

    public function details($email){

        $user = Agentstransactions::find($email); // Model Query

        return view('pages.officer.information.details')->with('user', $user);
    }

// ============================ End Details ====================================

    public function edit($id){

        $users= Agentstransactions::find($id);
        return view('pages.officer.information.edit')->with('user', $users);
    }
// ============================ End Edit ====================================

    public function update(Request $req, $id){

        $users = Agentstransactions::find($id);
        
        $users->nid = $req->nid;
        $users->phone = $req->phone;
        $users->dob = $req->dob;
        $users->type = $req->type;
        $users->save();

        return back()->with('update','Data Updated Successfully');
    }
// ============================ End Update ====================================

    public function delete($id){
  
        $users = Agentstransactions::find($id);
        
        return view('pages.officer.information.delete')->with('user', $users);
    }
// ============================ End Delete ====================================

    public function destroy($id){

        $users = Agentstransactions::find($id);
        $users->delete();

         return back()->with('delete','Delete Successfully');
    }
// ============================ End Destroy ====================================

    // public function pdf($id){

    //     $user = Agentstransactions::find($id); // Model Query

    //     $pdf = PDF::loadView('pages.officer.pdf.invoice',compact('user'));
    //     return $pdf->stream('invoice.pdf');
    // }
//===========================End pdf===========================================
}
