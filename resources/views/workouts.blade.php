@extends('layouts.app')

@section('content')

    

<h2>My Workouts</h2>

@foreach ($workouts as $workout)

   <div class="col-xs-3" id="workoutLinks">
   
       <a href="/workouts/{{ $workout['id'] }}">{{ $workout['name'] }}</a>
   
   </div>
 

@endforeach




 @endsection