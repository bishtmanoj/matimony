<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Education;
use App\User;
use Auth;

class ProfileController extends Controller
{
    public function index(){

        $user = Auth::user();
        
        return view('account.main',compact('user'));

    }

    public function edit($type = 'profile'){

        $user = Auth::user();
    
        $data['user'] = $user;

        switch($type):
        case 'other':
            $data['education'] = Education::all();
            $data['caste'] = Caste::all();
            $data['address'] = Address::all();
            $data['marital_status'] = MaritalStatus::all();
            $data['religion'] = Religion::all();
            $data['manglik'] = Manglik::all();
            $data['meta_key'] = $user->user_meta('education','meta_id');
        break;
        case 'profile':
        break;
        default:
        return redirect()->route('profile');
        break;
        endswitch;

        return view('account.forms.'.$type,$data);
    }

    public function store(Request $request, $type = 'profile'){

        $user = Auth::user();


        switch($type):
            case 'other':

            $request->validate(['education' => 'required']);

            if($education = $user->user_meta($type))
                $education->fill(['meta_id' => $request->get('education'),'meta_key' => $type])->save();
            else 
                $user->meta()->create(['meta_id' => $request->get('education'),'meta_key' => $type]);
            break;
            case 'profile':
            $request->validate([
                'firstname' => 'required|alpha',
                'phone' => 'required|digits:10|unique:users,phone,'.$user->id,
                'email' => 'required|email|unique:users,email,'.$user->id
            ]);
            $user->fill($request->only(['firstname','lastname','phone','email']))->save();
            break;
            default:
            return redirect()->route('profile');
            break;
            endswitch;


        

        $this->setFlash('success','Profile updated');

        return redirect()->route('profile');
    }
}