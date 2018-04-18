<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interest;
use Auth;

class InterestController extends Controller
{

    public function index(){
       $interests = Auth::user()->toInterests()->paginate(5);
        return view('interests.list',compact('interests'));
    }

    public function store(Request $request){

        if($interest = $request->user()->hasInterest($request->get('uid')))
            return ['alert' => 'danger', 'flash' => 'Connect request is pending']; 

        $request->user()->interests()->create(['to_user_id' => $request->get('uid')]);


        return ['alert' => 'success', 'flash' => 'success'];
    }

}