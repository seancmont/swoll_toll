<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class exercisesController extends Controller
{
    public function index()
    {
    	$exercises = \App\muscle_groups::with(['exercises'])->get();

    	return view('exercises', compact('exercises'));
    }

    public function save()
    {
    	return "saving data";
    }
}
