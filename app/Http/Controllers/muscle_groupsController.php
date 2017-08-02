<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\muscle_groups;
use App\Http\Auth;

class muscle_groupsController extends Controller
{
    public function index()
    {
    	$muscle_groups = muscle_groups::with(['exercises'])->get();

    	return view('muscle_groups.index', compact('muscle_groups'));
    }
}
