<?php

// Route to call home page
Route::get('/home', function () {
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
Route::get('/exercises', function() {
	$muscleGroups = [
		'Chest',
		'Back',
		'Legs',
		'Shoulders',
		'Triceps',
		'Biceps',
		'Abs'
	];
	return view('exercises', compact('muscleGroups')); 
});
// Route to call lift charts page
Route::get('/charts', function() {
	return view('charts'); 
});
// Route to call page that tracks lift gainz
Route::get('/progress', function() {
	return view('progress'); 
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
