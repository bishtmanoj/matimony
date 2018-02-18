<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class ProfileController extends Controller
{
    public function index(){

        $user = Auth::user();

        return view('account.profile',compact('user'));

    }

    public function edit(){
        $user = Auth::user();
        return view('account.create',compact('user'));
    }

    public function store(Request $request){

        $user = Auth::user();

        $request->validate([
            'firstname' => 'required|alpha',
            'phone' => 'required|digits:10|unique:users,phone,'.$user->id,
            'email' => 'required|email|unique:users,email,'.$user->id
        ]);

        $user->fill($request->only(['firstname','lastname','phone','email']))->save();

        $this->setFlash('success','Profile updated');

        return redirect()->route('profile');
    }
}