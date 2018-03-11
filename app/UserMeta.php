<?php

namespace App;


class UserMeta extends Model
{
    public function education(){
        return $this->belongsTo(Education::class);
    }
    public function caste(){
        return $this->belongsTo(Caste::class);
    }
    public function manglik(){
        return $this->belongsTo(Manglik::class);
    }
    public function religion(){
        return $this->belongsTo(Religion::class);
    }
    public function address(){
        return $this->belongsTo(Address::class);
    }
    public function marital(){ 
        return $this->belongsTo(MaritalStatus::class, 'marital_status_id');
    }
}
