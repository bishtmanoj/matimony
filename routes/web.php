<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware'=>'guest'],function(){
    Route::get('/','SessionsController@login')->name('sessons.login'); 
    Route::post('/','SessionsController@login')->name('sessons.login'); 

    Route::get('login','SessionsController@login')->name('sessions.login');
    Route::post('login','SessionsController@store');
    
    Route::get('signup','RegistrationController@signup')->name('sessions.signup');
    Route::post('signup','RegistrationController@store');
});

Route::group(['middleware'=>'auth'],function(){
    Route::get('logout','SessionsController@logout')->name('sessions.logout');
    Route::get('dashboard','DashboardController@dashboard')->name('dashboard');
});