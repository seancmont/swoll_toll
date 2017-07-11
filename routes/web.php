<?php

Route::get('/home', function () {
    return view ('home');

});

Route::get('/user', function () {
    return view ('user');

});

Route::get('/about', function() {
	return view('about'); 
});

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

Route::get('/charts', function() {
	return view('charts'); 
});

Route::get('/progress', function() {
	return view('progress'); 
});