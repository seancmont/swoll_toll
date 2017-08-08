<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class chartsController extends Controller
{
    public function index()
    {
    	$exercises = \App\Musclegroup::with(['exercises'])->get();

    	return view('charts', compact('exercises'));
    }
}
