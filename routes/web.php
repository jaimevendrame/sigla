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

Route::get('/user', function (){
    \Illuminate\Support\Facades\Auth::LoginUsingId(2);
});

Route::get('/', function () {
//    \Illuminate\Support\Facades\Auth::LoginUsingId(2);
    return view('welcome');
});

//Auth::routes();

Route::get('/home', function (){
    return redirect()->route('admin.home');
});

//Route::group(['prefix' => 'admin'], function (){
//        Route::get('/home', 'HomeController@index');
//});



Route::group([
    'prefix' => 'admin',
    'as' => 'admin.'
], function (){

    Auth::routes();

    Route::group(['middleware' => 'can:access-admin'], function (){

        Route::get('/home', 'HomeController@index')->name('home');

    });


});

