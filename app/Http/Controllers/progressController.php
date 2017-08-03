<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class progressController extends Controller
{
    public function index()
    {
    	$exercises = \App\muscle_groups::with(['exercises'])->get();

    	return view('progress', compact('exercises'));
    }
}
