<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use Auth;

class UserController extends Controller
{
    
    public function userRegister(Request $request){
        
        $request->validate([
            'email' => 'required|unique:users',
            'first_name' => 'required',
            'last_name' => 'required',
            'password' => 'required'
        ]);
        
        $first_name = $request->first_name;
        $last_name = $request->last_name;
        $data['name'] = $first_name . ' ' . $last_name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);

        $user = User::create($data);

        Auth::loginUsingId($user->id, true);

        return redirect('thank-you');
    }

}