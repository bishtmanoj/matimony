<?php

namespace App\Http\Controllers;

use App\Mail\UserVerification;
use Illuminate\Http\Request;
use App\User;
use Mail;

class RegistrationController extends Controller
{
    public function signup(){

        return view('sessions.signup');
    }
    public function store(Request $request){

        $request->validate([
            'firstname' => 'required|alpha',
            'phone' => 'required|digits:10|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'
        ]);

        $user = User::create([
            'firstname' => $request->get('firstname'),
            'lastname' => $request->get('lastname'),
            'phone' => $request->get('phone'),
            'email' => $request->get('email'),
            'password' => bcrypt($request->get('password'))
        ]);

        Mail::to($user->email,compact('user'))->send(new UserVerification($user));

        $this->setFlash('success','Your account has been created, please login to continue');
        return redirect()->route('login');
    }
}
