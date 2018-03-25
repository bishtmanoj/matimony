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
    public function index(Request $request){

    if($request->get('stype') == 'ajax')
        return User::with(
            'meta.caste',
            'meta.address', 
            'meta.religion', 
            'meta.marital', 
            'meta.education',
            'meta.height',
            'meta.employment',
            'meta.language'
            )->filter($request->get('data'))->paginate(5); 

    return view('users.filter');
        
    }
}