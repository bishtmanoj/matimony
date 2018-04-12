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
    Route::post('/','SessionsController@store')->name('login');

    Route::get('login','SessionsController@login')->name('login');
    Route::post('login','SessionsController@store')->name('login');
    
    Route::get('signup','RegistrationController@signup')->name('signup');
    Route::post('signup','RegistrationController@store');
});

Route::group(['middleware'=>'auth'],function(){
    Route::get('logout','SessionsController@logout')->name('logout');
    Route::get('dashboard','DashboardController@dashboard')->name('dashboard');
    Route::get('profile','ProfileController@index')->name('profile');
    Route::get('edit/profile','ProfileController@edit')->name('profile.edit');
    Route::get('edit/{type}','ProfileController@edit')->name('profile.edit');
    Route::post('edit/{type}','ProfileController@store');

    Route::post('profile/uploads','ProfileController@uploads')->name('profile.upload');

    //Interest
    Route::post('interest/save','InterestController@store')->name('interest.create');

    Route::get('preferences','PreferenceController@index')->name('preference.list');
    Route::get('preferences/{type}/edit','PreferenceController@edit')->name('preference.edit');
}); 

Route::get('listing','UsersController@index')->name('user.list');
Route::post('listing','UsersController@index')->name('user.list');
Route::get('filters','FiltersController@index')->name('filter.list');
Route::get('profile/{id}/view','ProfileController@index')->name('profile.viewas');

Route::get('verification/email/{uid}/{rid}/{token}','SessionsController@email_verification')->name('sessions.verify.email');
