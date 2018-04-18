<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{
    Manglik, MaritalStatus,Religion,UserHeight,Language,Address,Education,Employment,ProfilePost
};
use Auth;

class PreferenceController extends Controller
{
    public function index(){
        $user = Auth::user();
        return view('preferences.list',compact('user'));
    }

    public function edit(Request $request, $type = null){

        $manglik = Manglik::all();
        $maritalStatus = MaritalStatus::all();
        $religion = Religion::all();
        $userHeight = UserHeight::all();
        $language  = Language::all();
        $education = Education::all();
        $profilePost = ProfilePost::all();
        $cities = Address::cities()->get();
        $states = Address::states()->get();
        $employment = Employment::all();

        $preference = Auth::user()->preference;
        return [ 
            'manglik' => $manglik,
            'maritalStatus' => $maritalStatus,
            'religion' => $religion,
            'userHeight' => $userHeight,
            'language' => $language,
            'education' => $education,
            'profilePost' => $profilePost,
            'cities' => $cities,
            'states' => $states,
            'employment' => $employment,
            'preference' => $preference??[]
            ];
    }

    public function store(Request $request){

     $preference = $request->user();

switch($request->get('preferenceType')):
case 'basic':
$data = [
    'age_from' => $request->get('age_from'),
    'age_to' => $request->get('age_to'),
    'user_height_id' => $request->get('userHeight'),
    'language_id' => $request->get('language'),
    'martial_status_id' => $request->get('maritalStatus'),
    'religion_id' => $request->get('religion'),
 ];
break;
case 'location':
$data = [
    'city_id' => $request->get('city'),
        'state_id' => $request->get('state'),
        'country_id' => 1,//$request->get(),
];
break;
case 'education-career':
$data = [
    'education_id' => $request->get('education'),
'employer_id' => $request->get('employment')
];
break;
case 'other':
$data = [ 'profile_post_id' => $request->get('profile')];
break;
default:

return ['alert' => 'danger','flash' => 'Something went wrong.'];
break;
endswitch;

if($preference->preference()->count())
     $preference->preference->fill($data)->save();
else 
$preference->preference()->create($data);

$this->setFlash('success', 'Preferences saved');
       return ['alert' => 'success','flash' => 'Preferences saved'];
    }
}