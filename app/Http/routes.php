<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Authentificate routes...
Route::get('dashboard', ['middleware' => 'auth', function() {
    return view('dashboard', [
        'userLevel' => Auth::user()->userLevel,
        'userName' => Auth::user()->name,
        'userID' => Auth::user()->id
    ]);
}]);

Route::get('participation/new-event', [
    'middleware' => 'auth',
    'uses' => 'ParticipationController@getNewEvent'
]);
Route::post('participation/event-registered',[
    'middleware' => 'auth',
    'uses' => 'ParticipationController@postNewEvent'
]);
Route::get('participation/member-registered', [
    'as' => 'memberRegistered',
    'middleware' => 'auth',
    'uses' => 'ParticipationController@registerPap'
]);

Route::get('participation/dashboard', [
    'middleware' => 'auth',
    'uses' => 'ParticipationController@getUserDashboard'
]);

Route::get('profile/{userID}', [
    'middleware' => 'auth',
    'uses' => 'ProfileController@showProfile'
]);

// TEMP ROUTES
//Route::get('dashboard', function () {

 //   if{
//        Auth::check();
//    }
//    return view('dashboard');
//});

