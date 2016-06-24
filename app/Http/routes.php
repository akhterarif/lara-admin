<?php
Route::group(['middleware' => ['web', 'auth']], function () {

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
