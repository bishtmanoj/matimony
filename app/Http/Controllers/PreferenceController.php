<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PreferenceController extends Controller
{
    public function index(){

        return view('preferences.list');
    }

    public function create(){

    }

    public function edit(Request $request, $type = null){
return $type;
    }
}
