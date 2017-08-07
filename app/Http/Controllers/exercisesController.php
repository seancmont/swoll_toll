<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\muscle_groups;
use \App\exercises;
use \App\workouts;


class exercisesController extends Controller
{
    public function index()
    {
    	$exercises = muscle_groups::with(['exercises'])->get();

    	return view('exercises', compact('exercises'));
    }
// $request contains contents of post in exercises form
    public function save(Request $request)
    {
    	return $request->all();
    	// $exercises = new exercises;
    	// $exercises->name = $request->name;
    	// $exercises->save();
    	// return back();
    }
}
