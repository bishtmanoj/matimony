<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Education,Caste,Address,MaritalStatus,Religion,Manglik};
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
           $data['rows'] = [
                ['key'=> 'education', 'title' => 'Education', 'content' => Education::all()],
                ['key'=>'caste','title' => 'Caste', 'content' => Caste::all()],
                //['key'=> 'address', 'title' => 'Address', 'content' => Address::all()],
                ['key'=>'marital_status','title' => 'Martial Status', 'content' => MaritalStatus::all()],
                ['key'=>'religion','title' => 'Religion', 'content' => Religion::all()],
                ['key'=>'manglik', 'title' => 'Manglik', 'content' => Manglik::all()],
            ];
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
            $type = 'education';
            $request->validate([
                'education' => 'required',
                'caste' => 'required',
                'religion' => 'required',
                'manglik' => 'required',
                'marital_status' => 'required'
            ]);


            $metaData = [
                ['meta_id' => $request->get('education'),'meta_key' => 'education'],
                ['meta_id' => $request->get('caste'),'meta_key' => 'caste'],
                ['meta_id' => $request->get('religion'),'meta_key' => 'religion'],
                ['meta_id' => $request->get('marital_status'),'meta_key' => 'marital_status'],
                ['meta_id' => $request->get('manglik'),'meta_key' => 'manglik']
            ];

            foreach($metaData as $userMeta):
                if($user->user_meta($userMeta['meta_key']))
                    $user->user_meta($userMeta['meta_key'])->fill($userMeta)->save();
                else
                    $user->meta()->create($userMeta);
            endforeach;
        
            /*
            if($education = $user->user_meta($type)){
                $education->fill([
                    ['meta_id' => $request->get('education'),'meta_key' => $type],
                    ['meta_id' => $request->get('education'),'meta_key' => $type]
                    ])->save();
                }else {
                    $user->meta()->create(['meta_id' => $request->get('education'),'meta_key' => $type]);
                }*/
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