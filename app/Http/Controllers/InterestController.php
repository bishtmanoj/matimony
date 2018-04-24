<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interest;
use Auth;

class InterestController extends Controller
{

    public function index($type = 'sent'){

        if($type == 'sent')
            $interests = Auth::user()->interests()->paginate(5);
        else 
            $interests = Auth::user()->toInterests()->paginate(5);
        
        return view('interests.list',compact('interests', 'type'));
    }

    public function store(Request $request, $id = null, $action = null){

        if($action && $id):
        if(($interest = Auth::user()->toInterests()->find($id)) && (in_array($action, ['accept','decline']))):
            $interest->fill(['status' => $action == 'accept'?'accepted':'declined'])->save();
            $this->setFlash('success',$action == 'accept'?'Interest accepted':'Interest Declined');
        else:
            $this->setFlash('danger','Something went wrong');
        endif;

            return redirect()->back();
        
        endif;


        if($interest = $request->user()->hasInterest($request->get('uid')))
            return ['alert' => 'danger', 'flash' => 'Connect request is pending']; 

        $request->user()->interests()->create(['to_user_id' => $request->get('uid')]);


        return ['alert' => 'success', 'flash' => 'success'];
    }

}