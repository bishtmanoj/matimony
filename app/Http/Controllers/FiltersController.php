<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Caste;
use App\Manglik;
use App\MaritalStatus;
use App\Religion;

class FiltersController extends Controller
{
    public function index(){
        return  [
            'caste' => ['title' => 'Caste', 'data' => Caste::all()],
            'manglik' => ['title' => 'Manglik', 'data' => Manglik::all()],
            'marital_status' => ['title' => 'Marital Status', 'data' => MaritalStatus::all()],
            'religion' => ['title' => 'Religion', 'data' => Religion::all()]
        ];
    }

}
