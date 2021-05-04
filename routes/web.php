<?php

use Illuminate\Support\Facades\Auth;
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
    Route::redirect('/', '/chirps');

    Route::get('/chirps', 'ChirpsController@index')->name('home');
    Route::post('/chirps', 'ChirpsController@store')->name('chirps.store');
    Route::delete('/chirps/{chirp}', 'ChirpsController@destroy')->name('chirps.delete');

    Route::post('/chirps/{chirp}/like', 'ChirpLikesController@store')->name('chirplikes.store');
    Route::delete('/chirps/{chirp}/like', 'ChirpLikesController@destroy')->name('chirplikes.destroy');

    Route::post('/follow/{user:username}', 'FollowsController@store')->name('follow');

    Route::get('/profile/edit', 'ProfilesController@edit')->name('profile.edit');
    Route::patch('/{user:username}', 'ProfilesController@update')->name('profile.update');

    Route::get('/explore', 'ExploreController')->name('explore');
});

Route::get('/{user:username}', 'ProfilesController@show')->name('profile');
