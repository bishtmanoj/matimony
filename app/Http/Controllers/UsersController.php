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
    public function index(){

            $filters = [
                'caste' => ['title' => 'Caste', 'data' => Caste::all()],
                'manglik' => ['title' => 'Manglik', 'data' => Manglik::all()],
                'marital_status' => ['title' => 'Marital Status', 'data' => MaritalStatus::all()],
                'religion' => ['title' => 'Religion', 'data' => Religion::all()]
        ];
        $users = User::paginate(15, ['*'],'user');
//dd(request()->all());
        return view('users.list',compact('filters','users'));
        
    }
}
