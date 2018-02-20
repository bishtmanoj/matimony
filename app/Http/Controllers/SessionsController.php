<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Mail;
use App\UserReset;

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

    public function email_verification(UserReset $userReset, $uid = null, $rid = null, $token = null){
        
        $token = $userReset->findByAttributes([
            'user_id' => $uid,
            'id' => $rid, 
            'token' => $token,
            'status' => 'unused'
        ]);
        
        if($token):
            $token->user->fill(['email_verified' => 1])->save();
            $this->setFlash('success','Email verified successfully');
            $token->fill(['status' => 'expired'])->save();
        else:
            $this->setFlash('danger','Invalid verification link');
        endif;

        return redirect()->route('login');

    }
}