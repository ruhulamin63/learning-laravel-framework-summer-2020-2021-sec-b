<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function store(Request $req){

        // $req->validate([
        //     'name'=>'requird|max:191',
        //     'description'=>'requird|max:191',
        //     'price'=>'requird|max:191',
        //     'qty'=>'requird|max:191',

        // ]);

        $product = new Product;

        $product->name = $req->name;  
        $product->descreption = $req->descreption;  
        $product->price = $req->price;  
        $product->qty = $req->qty;  
       
        $product->save();

        return response()->json(['message','Product Added Successfully'],200);
    }

    public function update(Request $req, Product $id)
    {
        $users = Product::find($id);
        
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

        return response()->json(['message','Product Update Successfully'],200);
    }

    // ============================ End Update ====================================

    public function destroy($id){

        $users = Product::find($id);
        $users->delete();

        return response()->json(['message','Product Delete Successfully'],200);
    }
// ============================ End Destroy ====================================
}
