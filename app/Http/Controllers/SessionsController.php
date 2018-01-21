<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class SessionsController extends Controller
{
    public function login(){
        return view('sessions.login');
    }

    public function store(Request $request){

        $this->validate($request,[
            'email' => 'required|email|exists:users',
            'password' => 'required'
        ]);

        if (!Auth::attempt(['email' => $request->get('email'), 'password' => $request->get('password')], $request->get('remember'))):
            $this->setFlash('danger','Invalid credentials given.');
            return redirect()->route('sessions.login');  
        endif;
    }

    public function logout(){
        Auth::logout();

        $this->setFlash('success','Logged out successfully.');

        return redirect()->route('sessions.login');
    }
}