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
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->role = 'member';
        
        $user->save();
        return redirect('/');
    }

    public function login(Request $request){
        $email = $request->email;
        $password = $request->password;

        if(auth()->attempt(['email'=>$email, 'password'=>$password])){
            return redirect('/');
        }else{
            return redirect('/login');
        }
    }
}
