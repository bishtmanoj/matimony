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
    Route::get('/','SessionsController@login')->name('login');
    Route::post('/','SessionsController@login')->name('login');

    Route::get('login','SessionsController@login')->name('login');
    Route::post('login','SessionsController@store');
    
    Route::get('signup','RegistrationController@signup')->name('signup');
    Route::post('signup','RegistrationController@store');
});

Route::group(['middleware'=>'auth'],function(){
    Route::get('logout','SessionsController@logout')->name('logout');
    Route::get('dashboard','DashboardController@dashboard')->name('dashboard');
    Route::get('profile','ProfileController@index')->name('profile');
    Route::get('edit/profile','ProfileController@edit')->name('profile.edit');
    Route::post('edit/profile','ProfileController@store');
});