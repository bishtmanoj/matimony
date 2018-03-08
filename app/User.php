<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Carbon\Carbon;

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
        return $this->hasOne(UserMeta::class);
    }

    public function castes(){
        return $this->hasOne(UserMeta::class)->caste;
    }

    public function getCreatedAtAttribute($value){

        return Carbon::createFromFormat('Y-m-d H:i:s', $value)->diffForHumans();
    }

    public function getUpdatedAtAttribute($value){

        return Carbon::createFromFormat('Y-m-d H:i:s', $value)->diffForHumans();
    }

    public function scopeFilter($query, $filter = []){

        if(empty($filter))
            return $query;

            $caste = $marital_status = $manglik = $religion = [];

            if(isset($filter['caste'])){
                $caste = array_filter($filter['caste'],function($filter){
                    return $filter == true;
                });   
                if(!empty($caste)){
                    $query = $query->whereHas('meta', function ($query) use ($caste){
                        $query->whereIn('caste_id', $caste);
                    });
                }
            }
            if(isset($filter['marital_status'])){
                $marital_status = array_filter($filter['marital_status'],function($filter){
                    return $filter == true;
                });   
                if(!empty($marital_status)){
                    $query =  $query->whereHas('meta', function ($query) use ($marital_status){
                        $query->whereIn('marital_status_id', $marital_status);
                    });
                }
            }
            if(isset($filter['manglik'])){
                $manglik = array_filter($filter['manglik'],function($filter){
                    return $filter == true;
                });   
                if(!empty($manglik)){
                    $query = $query->whereHas('meta', function ($query) use ($manglik){
                        $query->whereIn('manglik_id', $manglik);
                    });
                }
            }
            if(isset($filter['religion'])){
                $religion = array_filter($filter['religion'],function($filter){
                    return $filter == true;
                });   
                if(!empty($religion)){
                    $query =  $query->whereHas('meta', function ($query) use ($religion){
                        $query->whereIn('religion_id', $religion);
                    });
                }
            }

            return $query;
    }

}