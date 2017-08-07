<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgressController extends Controller
{
    public function index()
    {
    	$exercises = \App\Musclegroup::with(['exercises'])->get();

    	return view('progress', compact('exercises'));
    }
}
