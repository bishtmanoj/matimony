<?php

namespace App;


class UserReset extends Model
{
    public $timestamps  = false;

public function findByAttributes($attributes){

        return $this->where($attributes)->first();
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
