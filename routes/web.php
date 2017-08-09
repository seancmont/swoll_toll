<?php

// Route to call home page
Route::get('/', function () {
    return view('home');

});
// Route to call user profile page
Route::get('/user', function () {
    return view('user');

});
// Route to call about page
Route::get('/about', function() {
	return view('about'); 
});
// Route to call exercises page
Route::get('/exercises', 'ExercisesController@index');
Route::post('/exercises', 'ExercisesController@save'); 

// Route to call lift charts page
Route::get('/charts', 'chartsController@index');

// Route to call page displaying list of submitted workouts
Route::get('/workouts', 'WorkoutsController@index');
Route::get('/workouts/{id}', 'WorkoutsController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/musclegroups', 'MusclegroupsController@index');



