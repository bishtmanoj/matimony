<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function meta(){
        return $this->hasMany(UserMeta::class);
    }

    public function user_meta($key = null, $col = null, $parentColumn = false){
        $userMeta = $this->meta()->where('meta_key', $key)->first();

        if(!$col)
            return $userMeta;

        if($parentColumn == true)
            return $userMeta->{$key}->{$col}??'';
        
        if($col)
            return $userMeta->$col??''; 
        else
            return $userMeta->{$key}??'';

        
    }
    public function education(){
        return $this->meta()->where('meta_key', 'education')->first();
    }
}