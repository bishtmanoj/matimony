<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{
    Education,
    Caste,
    Address,
    MaritalStatus,
    Religion,
    Manglik,
    Employment,
    Language,
    UserHeight,
    ProfilePost
};
use App\User;
use Auth;

class ProfileController extends Controller
{
    public function index($id = null){
        $viewas = !(Auth::check() && !$id);

        $user = $viewas? User::find($id):Auth::user();

        if(!$user){
            $this->setFlash('danger','You must login first');
            return redirect()->route('login');
        }

        $user = $user->load('meta.caste','meta.address', 'meta.religion', 'meta.marital', 'meta.education');

        return view('account.profile',compact('user','address','viewas'));

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
           $data['employments'] = Employment::all();
           $data['languages'] = Language::all(); 
           $data['userheights'] = UserHeight::all();
           $data['profile_for'] = ProfilePost::all();
        break;
        case 'profile':
        break;
        case 'picture':
        break;
        case 'password':
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
            case 'password':
                $request->validate([
                    'current_password' => 'required',
                    'password' => 'required|confirmed',
                    'password_confirmation' => 'required' 
                ]);

                if(!$user->validPassword($request->get('current_password'))):
                    $this->setFlash('danger','Current password match not found');
                    return redirect()->back();
                endif;
                $user->fill(['password' => bcrypt($request->get('password'))])->save();
            break;
            case 'other':

                $request->validate([
                    'employment' => 'required',
                    'language' => 'required',
                    'profile_for' => 'required',
                    'height' => 'required',
                    'education' => 'required',
                    'caste' => 'required',
                    'marital_status' => 'required',
                    'religion' => 'required',
                    'manglik' => 'required',
                    'address' => 'required',
                    'city' => 'required',
                    'state' => 'required',
                    'zipcode' => 'required',
                    'about_me' => 'required'
                ]);


                $metaData = [
                    'education_id' => $request->get('education'),
                    'caste_id' => $request->get('caste'),
                    'religion_id' => $request->get('religion'),
                    'marital_status_id' => $request->get('marital_status'),
                    'manglik_id' => $request->get('manglik'),
                    'profile_post_id' => $request->get('profile_for'),
                    'user_height_id' => $request->get('height'),
                    'employment_id' => $request->get('employment'),
                    'language_id' => $request->get('language'),
                    'about_me' => $request->get('about_me')
                ];

                $address = Address::create([
                    'street' => $request->get('address'),
                    'city' => $request->get('city'),
                    'state' => $request->get('state'),
                    'pincode' => $request->get('zipcode')
                ]);

                $metaData['address_id'] = $address->id;

                if($usermeta = $user->meta)
                    $usermeta->fill($metaData)->save();
                else 
                    $user->meta()->create($metaData);

                break;
             
            case 'profile':
                $request->validate([
                    'firstname' => 'required|alpha',
                    'phone' => 'required|digits:10|unique:users,phone,'.$user->id,
                    'email' => 'required|email|unique:users,email,'.$user->id,
                    'gender' => 'required|in:male,female',
                    'date_of_birth' => 'required'
                ]);
                $user->fill($request->only(['firstname','lastname','phone','email','gender','date_of_birth']))->save();
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