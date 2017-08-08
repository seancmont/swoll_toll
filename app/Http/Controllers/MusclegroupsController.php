<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Musclegroup;
use App\Http\Auth;


class MusclegroupsController extends Controller
{
    public function index()
    {
    	$muscle_groups = Musclegroups::with(['exercises'])->get();

    	return view('muscle_groups.index', compact('muscle_groups'));
    }
}
