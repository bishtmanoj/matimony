<?php

namespace App\Http\Controllers;

use App\Mail\UserVerification;
use Illuminate\Http\Request;
use App\User;
use App\ProfilePost;
use Mail;

class RegistrationController extends Controller
{
    public function signup(){
        $profile_posts = ProfilePost::all();
        return view('sessions.signup',compact('profile_posts'));
    }
    public function store(Request $request){

        $request->validate([
            'firstname' => 'required|alpha',
            'phone' => 'required|digits:10|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
            'gender' => 'required|in:male,female',
            'profile_post_for' => 'required|exists:profile_posts,id',
            'date_of_birth' => 'required'
        ]);

        $user = User::create([
            'firstname' => $request->get('firstname'),
            'lastname' => $request->get('lastname'),
            'phone' => $request->get('phone'),
            'email' => $request->get('email'),
            'password' => bcrypt($request->get('password')),
            'gender' => $request->get('gender'),
            'date_of_birth' => $request->get('date_of_birth')
        ]);

        $user->meta()->create(['profile_post_id' => $request->get('profile_post_for')]);

        Mail::to($user->email,compact('user'))->send(new UserVerification($user));

        $this->setFlash('success','Your account has been created, please login to continue');
        return redirect()->route('login');
    }
}
