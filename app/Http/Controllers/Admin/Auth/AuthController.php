<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginPage(){
        return view('admin.auth.login');
    }
    public function login(Request $request){
        // return view('admin.auth.login');
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $loginData = $request->only('email','password');
        // dd($loginData);
        if(Auth::attempt($loginData)){
            $request->session()->regenerate();
            toastr()->success('Welcome To Admin Panel.');
            return redirect()->route('admin-dashboard');
        }
        else{
            dd("Something Is Worng !!!!! ");
        }
    }

    public function logout(){
        Auth::logout();
        toastr()->success('Please Login Again.');
        return redirect()->route('login-page');
    }
}
