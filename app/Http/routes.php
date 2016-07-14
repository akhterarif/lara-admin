<?php
// Authentication routes...
// Route::get('auth/login', 'Auth\AuthController@getLogin');
// Route::post('auth/login', 'Auth\AuthController@postLogin');
// Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::group(['middleware' => 'web'], function () {
    Route::get('/', function () {
        // return asset('assets/');
        return redirect(url('posts'));
        // return "Hello";
    });

    // Route::get('/login', function(){
    //     return view('layouts.pages.login');
    // });

    Route::controllers([
        'auth' => 'Auth\AuthController',
        'password' => 'Auth\PasswordController'
    ]);
});
