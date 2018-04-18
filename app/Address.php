<?php

namespace App;


class Address extends Model
{
    public function scopeCities($query){
        return $query->groupBy('city');
    }

    public function scopeStates($query){
        return $query->groupBy('state');
    }
}
