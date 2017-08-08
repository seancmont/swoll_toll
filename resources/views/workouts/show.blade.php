@extends('layouts.app')

@section('content')

{{ $workout['name'] }}

@foreach ($workout['exercises'] as $exercise)

		<p>{{ $exercise['name'] }}</p>
		<p>{{ $exercise['weight'] }}</p>
		<p>{{ $exercise['total_reps'] }}</p>

@endforeach

<button type="toWorkouts" id="toWorkouts"><a href=/workouts>Workouts</a></button>

@endsection