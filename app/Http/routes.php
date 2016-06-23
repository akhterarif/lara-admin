<?php
Route::group(['middleware' => ['web']], function () {

    Route::get('/', function () {
        // return asset('assets/');
        return view('posts.index');
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
