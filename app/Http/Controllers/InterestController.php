<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class InterestController extends Controller
{

    public function index(){
        return Auth::check()?Auth::user():[];
    }

    public function store(Request $request){

        if($interest = $request->user()->hasInterest($request->get('uid')))
            return ['alert' => 'danger', 'flash' => 'Connect request is pending']; 

        $request->user()->interests()->create(['to_user_id' => $request->get('uid')]);

        return ['alert' => 'success', 'flash' => 'success'];
    }

}