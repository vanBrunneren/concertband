<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use Hash;
use App\User;

class UserController extends Controller
{
    public function changepw() 
    {
    	return view('auth.changepw');
    }

    public function changepwSave(Request $request) 
    {
    	$user_id = Auth::User()->id;                       
        $obj_user = User::find($user_id);
        $obj_user->password = bcrypt($request['password']);
        $obj_user->save(); 

        return redirect('/admin/user/changepw')->with('message', 'Das Passwort wurde erfolgreich geändert.');

    }
}
