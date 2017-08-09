@extends('layouts.app')

@section('content')

<label for="muscleGroups">Choose muscle group to chart </label>
<select id="muscleGroups" onchange="chosenMuscle();">
<option>Please select</option>
		<!-- list of each muscle group -->
		<!-- convert list of exercises to control the dropdown -->
            @foreach ($exercises as $exercise) 
            	<!-- the exercise name from database goes where original option value was -->
				<option value="{{ $exercise->name }}">{{ $exercise->name }}</option>
            @endforeach
 </select>
      


<!-- function to initially hide all exercises, then show exercises listed under chosen muscle group -->
<script>
function chosenMuscle() {
	var showExercises = document.getElementById(muscleGroups.value);
	var hideExercises = document.getElementsByClassName('muscleList');
	console.log(hideExercises);
	console.log(showExercises);
	for(var i = 0; i < hideExercises.length; i++){
		console.log(i);	
		hideExercises[i].style.display = 'none';
	}
		showExercises.style.display = 'block';
}
</script>

<label for="workouts">Choose a workout </label>
<select id="workoutList" onchange="chosenWorkout();">
<option>Please select</option>
		<!-- list of workouts to control the dropdown -->
            @foreach ($workouts as $workout) 
            	<!-- the exercise_id from database goes where original option value was -->
				<option value="{{ $exercise_workout->exercise_id }}">{{ $exercise_workout->weight }}{{ $exercise_workout->total_reps }}</option>
            @endforeach
 </select>

 @foreach ($exercises as $muscleGroup) 
		<div class="muscleList" id="{{ $muscleGroup->name }}">		
			<table>
			 	<tr>
				    <th>Name</th>
				    <th>Weight</th> 
				    <th>Total Reps</th>
			 	</tr>

			@foreach ($muscleGroup->exercises as $exercise)
				<tr>
				    <td>{{ $workout->id }}</td>
				    <td>{{ $workout->weight }}</td> 
				    <td>{{ $workout->total_reps }}</td>
			    </tr>
			@endforeach
				
			</table>

			<p>Looking swoll, bro!</p>
        </div>        
 @endforeach

<!--  @foreach ($workouts as $workout) 
		<div class="workoutList" id="{{ $workout->id }}">		
			<table>
			 	<tr>
				    <th>Name</th>
				    <th>Weight</th> 
				    <th>Total Reps</th>
			 	</tr>

			@foreach ($muscleGroup->exercises as $exercise)
				<tr>
				    <td>{{ $exercise->name }}</td>
				    <td>{{ $exercise->weight }}</td> 
				    <td>{{ $exercise->total_reps }}</td>
			    </tr>
			@endforeach
				
			</table>

			<p>Looking swoll, bro!</p>
        </div>        
 @endforeach -->

 <button type="button" class="toWorkouts"><a href=/workouts>Workouts</a></button>

 @endsection