@extends('layouts.app')

@section('content')

<button class="btn" id="toHome"><a href=/home>Home</a></button>   

<h2>My Workouts</h2>

<div class="myWorkouts">

@foreach ($workouts as $workout)

   <div class="col-xs-12" id="workoutLinks">
   
       <a href="/workouts/{{ $workout['id'] }}">{{ $workout['name'] }}</a>
       <a href="/workouts/{{ $workout['weight'] }}">{{ $workout['weight'] }}</a>
       <a href="/workouts/{{ $workout['total_reps'] }}">{{ $workout['total_reps'] }}</a>
 
   </div>
 

@endforeach

</div>

 @endsection