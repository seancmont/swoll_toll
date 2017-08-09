<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class chartsController extends Controller
{
    public function exercises()
    {
    	$exercises = \App\Musclegroup::with(['exercises'])->get();

    	return view('charts', compact('exercises'));
    }

    public function workouts()
    {
    	$workouts = \App\Exerciseworkout::with(['workouts'])->get();

    	return view('charts', compact('workouts'));
    }
}
