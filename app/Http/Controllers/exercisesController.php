<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Musclegroup;
use \App\Exercise;
use \App\Workout;
use \App\Exerciseworkout;


class ExercisesController extends Controller
{
    public function index()
    {
    	$exercises = Musclegroup::with(['exercises'])->get();

    	return view('exercises', compact('exercises'));
    }
// $request contains contents of post in exercises form
    public function save(Request $request)
    {
    	// TODO: persist workout & get workout id
    	$workout = new workout;
    	$workout->name = 'test workout 3';
    	$workout->save();

    	foreach ($request->exercises as $exId => $exercise) {
    		$ex = new exerciseworkout;
    		$ex->workout_id = $workout->id;
    		$ex->exercise_id = $exercise['id'];
    		$ex->weight = $exercise['weight'];
    		$ex->total_reps = $exercise['reps'];

    		$ex->save();

    		// TODO-- make sure this worked
    	}

    }
}
