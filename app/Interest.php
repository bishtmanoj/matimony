<?php

namespace App;


class Interest extends Model
{
    public function sentBy(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function sentTo(){
        return $this->belongsTo(User::class, 'to_user_id');
    }
}
