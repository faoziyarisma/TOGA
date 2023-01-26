<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login.index',[
            'title' => 'Login',
            'active' => 'login'
        ]);
    }

    public function authenticate(Request $request){
        // dd($request->password);
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|max:30|min:5'
        ]);
        $cek = 0;
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            $cek = 1;
            return redirect()->intended('/dashboard');
        }
        // dd($cek);
        return back()->with('loginError', 'Login Gagal!');
    }

    
    
}
