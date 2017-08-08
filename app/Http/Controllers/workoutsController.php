<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Musclegroup;
use \App\Exercise;
// use \App\Workout;

class WorkoutsController extends Controller
{
	public function index()

    {
    	$workouts = \App\Workout::all();

    	return view('workouts', compact('workouts'));
    }

    public function show($id){

    	// $workout=\App\Workout::find($id);
    	$workout = \App\Workout::with('exercises')->where('id', '=', $id)->first();
    	// dd($workout);

    	return view('workouts.show', compact('workout'));

    }

    	

    public function save(Request $request)
    {
    	return $request->all();
    }
}
