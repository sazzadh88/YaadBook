<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;

class UserController extends Controller
{
    
    public function userRegister(Request $request){
        
        $request->validate([
            'email' => 'required|unique:users',
            'name' => 'required',
            'password' => 'required'
        ]);
        
        $first_name = $request->first_name;
        $last_name = $request->last_name;
        $data['name'] = $first_name . ' ' . $last_name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);

        $user = User::create($data);

        return $user;
    }

}