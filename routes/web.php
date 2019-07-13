<?php
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
    //Admin Fantasy Driver pages
    Route::get('/admin/fantasy/drivers', 'DriverController@showDrivers')->name('adminFantasyDrivers');
    Route::get('/admin/fantasy/drivers/add', 'DriverController@showAddDriver')->name('adminFantasyShowDriverAdd');
    Route::post('/admin/fantasy/drivers/add/new', 'DriverController@addDriver')->name('adminFantasyDriverAdd');
    Route::get('/admin/fantasy/driver/{driver}', 'DriverController@showSpecificDriver')->name('adminSpecificDriver');
    Route::patch('/admin/fantasy/update/{driver}', 'DriverController@updateDriver')->name('adminUpdateDriver');
    Route::delete('/admin/fantasy/delete/{driver}', 'DriverController@deleteDriver')->name('adminDriverDelete');
    //Admin Fantasy Teams Pages
    Route::get('/admin/fantasy/teams', 'FantasyTeamController@showTeam')->name('adminFantasyTeams');
    Route::get('/admin/fantasy/teams/add', 'FantasyTeamController@showAddTeam')->name('adminFantasyShowTeamAdd');
    Route::post('/admin/fantasy/teams/add/new', 'FantasyTeamController@addTeam')->name('adminFantasyTeamAdd');
    Route::get('/admin/fantasy/team/{team}', 'FantasyTeamController@showSpecificTeam')->name('adminSpecificTeam');
    Route::patch('/admin/fantasy/update/team/{team}', 'FantasyTeamController@updateTeam')->name('adminUpdateTeam');
    Route::delete('/admin/fantasy/delete/team/{team}', 'FantasyTeamController@deleteTeam')->name('adminTeamDelete');
    //Update Points
    Route::get('/admin/fantasy/updatePoints', ('FantasyPointsController@showPoints'))->name('adminFantasyPoints');
    Route::get('/admin/fantasy/updatePoints/getInfo', ('FantasyPointsController@getMostRecentRace'))->name('adminFantasyPointsGetInfo');
});

//Auth Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/races', 'RaceController@index')->name('races');
    Route::get('/races/pastraces', 'RaceController@pastSeasons')->name('pastRaces');
    Route::get('/races/pastraces/{year}', 'RaceController@specificSeason')->name('specificSeason');

    Route::get('/drivers', 'DriverController@index')->name('drivers');
});
