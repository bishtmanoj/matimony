<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
class SessionsController extends Controller
{
    public function login(){

        return view('sessions.login');
    }

    public function store(Request $request){

        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required'
        ]);
      
        if (!Auth::attempt(['email' => $request->get('email'), 'password' => $request->get('password')], $request->get('remember'))):
            $this->setFlash('danger','Invalid credentials given.');
            
            return redirect()->route('login');
        endif;

        return redirect()->route('dashboard');
    }

    public function logout(){
        Auth::logout();

        $this->setFlash('success','Logged out successfully.');

        return redirect()->route('login');
    }
}