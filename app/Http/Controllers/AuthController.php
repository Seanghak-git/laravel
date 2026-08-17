<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function registerForm()
    {
        return view('auth.register');
    }
    public function register(Request $req) 
    {
        $v = $req->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|string|email|max:250|unique:users,email',
            'password' => 'required|string|min:8',
        ]);
        $v['password'] = Hash::make($v['password']); 
        $v['role'] = 'manager';
        User::create($v);
        return redirect()->route('auth.loginform')->with('message', 'register Successfully!');
    }

    public function loginForm(){
        return view('auth.login');
    }
    
    public function login(Request $req){
        $credentail = $req->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
        ]);
        if (Auth::attempt($credentail)) {
            $req->session()->regenerate();
            return redirect()->route('welcome')->with('message', 'Login successfully!');;
        }
    return back()->withErrors([
    'email' => 'The provided credentials do not match our records',
    ])->onlyInput('email');
    }
    
}
