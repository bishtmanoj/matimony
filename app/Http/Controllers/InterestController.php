<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InterestController extends Controller
{
    public function store(Request $request){

        if($interest = $request->user()->hasInterest($request->get('uid')))
            $interest->delete();
        else 
            $request->user()->interests()->create(['to_user_id' => $request->get('uid')]);

        return ['alert' => 'success', 'flash' => 'success'];
    }
}