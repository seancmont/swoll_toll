<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\muscle_groups;
use \App\exercises;

class workoutsController extends Controller
{
	public function index()
    {
    	$workouts = muscle_groups::with(['exercises'])->get();

    	return view('exercises', compact('exercises'));
    }

    public function save(Request $request)
    {
    	return $request->all();
    }
}
