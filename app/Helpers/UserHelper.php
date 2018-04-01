<?php 
namespace App\Helpers;
use Auth;

class UserHelper{
    static function hasInterest($userId){
        return Auth::check() && Auth::user()->hasInterest($userId);
        }
}