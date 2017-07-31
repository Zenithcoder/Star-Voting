<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::get('/', 'HomeController@index')->name('home');

Route::get('/about', 'HomeController@about')->name('about');
Route::get('/admin', 'AdminController@index')->name('admin.index');
Route::get('/create', 'AdminController@create')->name('admin.create');
Route::post('/store-contestant', 'AdminController@storeC')->name('admin.storeC');
Route::get('/all', 'AdminController@AllCont')->name('admin.all');

Route::get('/all1', 'AdminController@AllCont1')->name('admin.all1');
Route::get('/votingstat', 'AdminController@Stat')->name('admin.stat');

Route::get('/abcx\zcxcout', function () {
    return view('about');
});


Route::group(['middleware'=> 'auth'], function(){
Route::get('/home', 'HomeController@home')->name('home.vote');
Route::get('/vote{id}', 'HomeController@vote')->name('vote.vote');

});


Route::group(['prefix'=>'user'], function(){

Route::group(['middleware'=> 'guest'], function(){

    Route::get('/signup', [
    'uses'=>'UserController@getSignup',
    'as' => 'user.signup'
    ]);
    
Route::post('/signup', [
    'uses'=>'UserController@postSignup',
    'as' => 'user.signup'
    ]);

Route::get('/signin', [
    'uses'=>'UserController@getSignin',
    'as' => 'user.signin'
    ]);

Route::post('/signin', [
    'uses'=>'UserController@postSignin',
    'as' => 'user.signin'
    ]);
});

Route::group(['middleware'=> 'auth'], function(){

Route::get('/profile', [
    'uses'=>'UserController@getProfile',
    'as' => 'user.profile'
    ]);




Route::get('/Logout', [
    'uses'=>'UserController@getLogout',
    'as' => 'user.logout'
    ]);
});
});

