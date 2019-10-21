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
Route::group(['middleware' => ['web', 'auth']], function () {
    Route::get('logout', 'Auth\LoginController@logout')->name('logout');
    Route::get('search', 'TaskController@searchUsers');
    Route::get('user', 'TaskController@user')->name('user');
    Route::get('/home', 'TaskController@showUserData')->name('home');
});
Route::get('login', 'Auth\LoginController@login')->name('login');
Route::get('login/{github}', 'Auth\LoginController@redirectToProvider')->name('sing_in');
Route::get('login/{github}/callback', 'Auth\LoginController@handleProviderCallback');


