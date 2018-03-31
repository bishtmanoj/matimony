<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Caste;
use App\Manglik;
use App\MaritalStatus;
use App\Religion;


class UsersController extends Controller
{
    public function index(Request $request, User $user){

    if($request->get('stype') == 'ajax'){
      
        $users = $user->filter($request->get('data'))->paginate(5);

        return [
            'hasMore' => $users->hasMorePages(),
            'lastItem' => $users->lastItem(),
            'total' => $users->total(),
            'nextPage' => $users->nextPageUrl(), 
            'content' => view('users.list',compact('users'))->render()
        ];


    }
        // return User::with(
        //     'meta.caste',
        //     'meta.address', \
        //     'meta.religion', 
        //     'meta.marital', 
        //     'meta.education',
        //     'meta.height',
        //     'meta.employment',
        //     'meta.language'
        //     )->filter($request->get('data'))->paginate(5); 

    return view('users.filter');
        
    }
}