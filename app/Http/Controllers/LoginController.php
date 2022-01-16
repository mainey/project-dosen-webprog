<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function loginUser()
    {
        return view('login');
    }

    public function registerUser()
    {
        return view('register');
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/login');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:users,name|regex:/^[a-zA-Z ]*$/',
            'email' => 'required|unique:users,email|email',
            'password' => 'required|between:5,20',
            'address' => 'required|between:5,95'
        ]);

        if ($validator->fails()) {
            return redirect('/register')->withInput()->withErrors($validator);
        }

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->role = 'member';

        $user->save();
        return redirect('/login');
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('/login')->withInput()->withErrors($validator);
        }

        $email = $request->email;
        $password = $request->password;

        if (auth()->attempt(['email' => $email, 'password' => $password])) {
            return redirect('/');
        } else {
            return redirect('/login')->withInput()->withErrors([
                'wrong_login' => 'Password and Username not matched'
            ]);
        }
    }
}
