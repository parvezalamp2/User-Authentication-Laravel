<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function login(Request $request){
        //validate data
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        //login code
        if(\Auth::attempt($request->only('email', 'password'))){
            return redirect('home');
        }

        return redirect('login')->withError('Login Details are not valid');

    }

    public function register_view(){
        return view('auth.register');
    }

    
    public function register(Request $request){
        //validate data
        $request->validate([
            'name'=> 'required',
            'email' => 'required|unique:users|email',
            'password' => 'required|confirmed|min:8'
        ]);

        
        //save in user table
        User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> \Hash::make($request->password)
        ]);

        
        // redirect to login
        if(\Auth::attempt($request->only('email', 'password'))){
            return redirect('home');
        }

        return redirect('register')->withError('Error');

    }

    public function home(){
        return view('home');
    }

    public function logout(){
        \Session::flush();
        \Auth::logout();
        return redirect('login');
    }
}
