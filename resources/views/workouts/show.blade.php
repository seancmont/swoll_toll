@extends('layouts.app')

@section('content')

<div class="col-md-12">
	<button class="btn" id="toHome"><a href=/home>Home</a></button>
	<button class="btn" id="toWorkouts"><a href=/workouts>Workouts</a></button>
</div>

{{ $workout['name'] }}
	<table>
	 	<tr>
		    <th>Name</th>
		    <th>Weight</th> 
		    <th>Total Reps</th>
	 	</tr>
@foreach ($workouts as $workout)
	@foreach ($exercise as $exer)
	@if ($workout->exercise_id === $exer->id)
	 	<tr>
			<td>{{ $exer->name }}</td>
			<td>{{ $workout->weight }}</td>
			<td>{{ $workout->total_reps }}</td>
		</tr>	
	@endif
	@endforeach
@endforeach
	</table>



@endsection