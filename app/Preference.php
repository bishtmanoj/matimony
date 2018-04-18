<?php

namespace App;

class Preference extends Model
{
    public function height(){
        return $this->belongsTo(UserHeight::class,'user_height_id');
    }

    public function language(){
        return $this->belongsTo(Language::class);
    }

    public function maritalStatus(){
        return $this->belongsTo(MaritalStatus::class, 'martial_status_id');
    }

    public function education(){
        return $this->belongsTo(Education::class);
    }
    public function religion(){

        return $this->belongsTo(Religion::class);
    }

    public function employment(){
        return $this->belongsTo(Employment::class, 'employer_id');
    }

    public function profileBy(){
        return $this->belongsTo(ProfilePost::class,'profile_post_id');
    }

    public function country(){
        return $this->country_id?'India':null;
    }
    public function city(){
        return $this->belongsTo(Address::class,'city_id');
    }
    public function state(){
        return $this->belongsTo(Address::class,'state_id');
    }
}
