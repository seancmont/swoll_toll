<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Musclegroup;
use \App\Exercise;
use \App\Workout;
use \App\Exerciseworkout;

class WorkoutsController extends Controller
{
    public function index()

    {
        $workouts = \App\Workout::all();

        return view('workouts', compact('workouts'));
    }

    public function show($id){

        $workout=\App\Workout::find($id);
        $workouts = \App\Exerciseworkout::where('workout_id', '=', $id)->get();



        $exercise = Exercise::all();

        

        return view('workouts.show', compact('workout','workouts', 'exercise'));

    }

        

    public function save(Request $request)
    {
        return $request->all();
    }
}
