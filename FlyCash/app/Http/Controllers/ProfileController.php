<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Http\Requests\ProfileRequest;
use App\Http\Requests\PasswordRequest;

use App\Models\Customer;

use App\Http\Requests\EditProfileRequest;

class ProfileController extends Controller
{
    /**
     * Show the form for editing the profile.
     *
     * @return \Illuminate\View\View
     */
    public function edit(Officer $profile)
    {
        $users= Officer::find($profile);

        return view('pages.officer.profile.edit')->with('user', $users);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Officer  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, Officer $profile)
    {
        $users = Officer::find($profile);
        
        // $file = $req->file('image');
        // $imageName=time().".".$file->extension();
        // $file->move(public_path('upload'),$imageName);

        $users->name = $req->name;
        // if($users->password != $req->password){
        //     $users->password = $req->password;
        // }
        $users->email = $req->email;
        $users->phone = $req->phone;
        $users->nid = $req->nid;
        $users->dob = $req->dob;
        $users->type = $req->type;
        // $users->image = $imageName;
        $users->save();

        return back()->whit('update','Profile updated successfully');
    }

    /**
     * Change the password
     *
     * @param  \App\Http\Requests\PasswordRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function password(PasswordRequest $request)
    {
        auth()->user()->update(['password' => Hash::make($request->get('password'))]);

        return back()->withPasswordStatus(__('Password successfully updated.'));
    }
}
