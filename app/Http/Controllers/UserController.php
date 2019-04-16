<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;

class UserController extends Controller
{
    public function showForm(){
        $users = User::all();
        return view('user.registration')
            ->with('u',$users);
    }

    public function userInsert(Request $request){
        $request->validate([
                'name' => 'required|max:50',
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

    public function updateUser($user_id){
        $user = User::find($user_id);
        $users = User::all();
        return view('user.registration')
            ->with('user',$user)
            ->with('u',$users);
    }

    public function updateSaveUser(Request $request){
        $request->validate([
                'name' => 'required|max:50'
            ]);
        $user = User::find($request['id']);
        $user->name = $request['name'];
        //$user->email = $request['email'];
        if($request['password'] != ''){
            $user->password = bcrypt($request['password']);
        }
        $user->save();
        Session::flash('success','Successfully updated');
        return redirect()->back();
    }

    public function showUserByRole($role){
        $user = new User;
        return view('user.registration')->with('u',$user->searchUserByRole($role));
    }
}
