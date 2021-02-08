<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return redirect()->route('home');
    });

    Route::get('/chirps', 'ChirpsController@index')->name('home');
    Route::post('/chirps', 'ChirpsController@store')->name('chirps.store');

    Route::post('/follow/{user:username}', 'FollowsController@store')->name('follow');

    Route::get('/profile/edit', 'ProfilesController@edit')->name('profile.edit');
    Route::patch('/{user:username}', 'ProfilesController@update')->name('profile.update');

    Route::get('/explore', 'ExploreController@index')->name('explore');
});

Route::get('/{user:username}', 'ProfilesController@show')->name('profile');
