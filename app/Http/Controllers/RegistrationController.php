<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
    public function signup(){
        return view('sessions.signup');
    }
    public function store(Request $request){

        $this->validate($request,[
            'firstname' => 'required|alpha',
            'phone' => 'required|digits:10|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'
        ]);

        User::create([
            'firstname' => $request->get('firstname'),
            'lastname' => $request->get('lastname'),
            'phone' => $request->get('phone'),
            'email' => $request->get('email'),
            'password' => bcrypt($request->get('password'))
        ]);

        $this->setFlash('success','Your account has been created, please login to continue');
        return redirect()->route('sessions.login');
    }
}
