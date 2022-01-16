<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function loginUser(){
        return view('login');
    }

    public function registerUser(){
        return view('register');
    }

    public function register(Request $request){
        $user = new User();
        $user->name = $request->user;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->password = bcrypt($request->password);
        $user->phone = $request->phone;
        $user->role = 'member';
    }

    public function login(Request $request){
        $email = $request->email;
        $password = $request->password;

        if(auth()->attempt(['email'=>$email, 'password'=>$password])){
            return redirect('/home');
        }else{
            return redirect('/login');
        }
    }
}
