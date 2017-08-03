<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class chartsController extends Controller
{
    public function index()
    {
    	$exercises = \App\muscle_groups::with(['exercises'])->get();

    	return view('charts', compact('exercises'));
    }
}
