<?php

namespace App;


class UserMeta extends Model
{
    public function education(){
        return $this->belongsTo(Education::class,'meta_id');
    }
    public function caste(){
        return $this->belongsTo(Caste::class,'meta_id');
    }
    public function manglik(){
        return $this->belongsTo(Manglik::class,'meta_id');
    }
    public function religion(){
        return $this->belongsTo(Religion::class,'meta_id');
    }
    public function address(){
        return $this->belongsTo(Address::class,'meta_id');
    }
    public function marital_status(){
        return $this->belongsTo(MaritalStatus::class,'meta_id');
    }
}
