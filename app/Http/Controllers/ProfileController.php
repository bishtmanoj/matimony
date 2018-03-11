<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Education,Caste,Address,MaritalStatus,Religion,Manglik};
use App\User;
use Auth;

class ProfileController extends Controller
{
    public function index(){
        
        $user = Auth::user()->load('meta.caste','meta.address', 'meta.religion', 'meta.marital', 'meta.education');

        return view('account.main',compact('user','address'));

    }

    public function edit($type = 'profile'){

        $user = Auth::user();
    
        $data['user'] = $user;

        switch($type):
        case 'other':
           $data['education'] = Education::all();
           $data['caste'] = Caste::all();
           $data['marital'] = MaritalStatus::all();
           $data['religion'] = Religion::all();
           $data['manglik'] = Manglik::all();
        
        break;
        case 'profile':
        break;
        case 'picture':
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
                $request->validate([
                    'education' => 'required',
                    'caste' => 'required',
                    'religion' => 'required',
                    'manglik' => 'required',
                    'marital_status' => 'required'
                ]);


                $metaData = [
                    'education_id' => $request->get('education'),
                    'caste_id' => $request->get('caste'),
                    'religion_id' => $request->get('religion'),
                    'marital_status_id' => $request->get('marital_status'),
                    'manglik_id' => $request->get('manglik')
                ];

                if($usermeta = $user->meta)
                    $usermeta->fill($metaData)->save();
                else 
                    $user->meta()->create($metaData);

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

    public function uploads(Request $request){

        $data = $request->image;


        list($type, $data) = explode(';', $data);
        list(, $data)      = explode(',', $data);

        $data = base64_decode($data);
        $image_name = uniqid('pic-', true).time().'.png';
        $path = public_path() . "/uploads/profiles/" . $image_name;

        file_put_contents($path, $data);
        $user = Auth::user();

        $user->fill(['profile_picture' => $image_name])->save();
        $user->galleries()->create(['name' => $image_name]);
        return response()->json(['success'=>'done']);
    }
}
