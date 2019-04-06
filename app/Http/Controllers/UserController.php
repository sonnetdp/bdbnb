<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;

class UserController extends Controller
{
    public function showForm(){

        return view('user.registration');
    }

    public function userInsert(Request $request){
        $request->validate([
                'email' => 'required|unique:users|max:191',
                'password' => 'required|min:6|max:10'
            ]);
        $user = new User;
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = bcrypt($request['password']);
        $user->save();
        Session::flash('success','Successfully created');
        return redirect()->back();
    }
}
