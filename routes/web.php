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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Admin Routes
Route::middleware(['admin'])->group(function () {
    Route::get('/admin/dashboard', 'AdminController@showDashboard')->name('adminDashboard');
    //Admin user pages
    Route::get('/admin/users', 'AdminController@showUsers')->name('adminUsers');
    Route::get('/admin/users/{user}', 'AdminController@showSpecificUser')->name('adminSpecificUser');
    Route::patch('/admin/user/update/{id}', 'AdminController@updateUser')->name('adminUpdateUser');
    Route::delete('/admin/user/delete/{id}', 'AdminController@deleteUser')->name('adminUserDelete');
});

//Auth Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/races', 'RaceController@index')->name('races');
    Route::get('/races/pastraces', 'RaceController@pastSeasons')->name('pastRaces');
    Route::get('/races/pastraces/{year}', 'RaceController@specificSeason')->name('specificSeason');

    Route::get('/drivers', 'DriverController@index')->name('drivers');
});
