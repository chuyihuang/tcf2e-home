<?php

Route::get('/', [
    'as'   => 'home',
    'uses' => 'PageController@index'
]);

Route::get('about', [
    'as'   => 'about',
    'uses' => 'PageController@about'
]);

//Route::get('meetups', [
//    'as'   => 'meetups',
//    'uses' => 'PageController@meetups'
//]);
//
//Route::get('resources', [
//    'as'   => 'resources',
//    'uses' => 'PageController@resources'
//]);

Route::group(['prefix' => 'dashboard'], function () {

    Route::group(['middleware' => 'auth'], function () {

        Route::get('/', [
            'as'   => 'dashboard',
            'uses' => 'PageController@dashboard'
        ]);

        Route::resource('meetups', 'MeetupController');

    });

    Route::controller('auth', 'Auth\AuthController');

});
