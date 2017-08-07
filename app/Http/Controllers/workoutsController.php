<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Musclegroup;
use \App\Exercise;

class WorkoutsController extends Controller
{
	public function index()
    {
    	$workouts = Musclegroup::with(['exercises'])->get();

    	return view('exercises', compact('exercises'));
    }

    public function save(Request $request)
    {
    	return $request->all();
    }
}
