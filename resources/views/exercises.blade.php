@extends('layouts.app')

@section('content')

<label for="muscleGroups">Choose today's muscle group for your lift: </label>
<select id="muscleGroups" onchange="chosenMuscle();">
<option>Please select</option>
		<!-- list of each muscle group -->
		<!-- //convert list of exercises to control the dropdown -->
            @foreach ($exercises as $exercise) 
				<option value="{{ $exercise->name }}">{{ $exercise->name }}</option>
            @endforeach
 </select>
      


<!-- function to initially hide all exercises, then show exercises listed under chosen muscle group -->
<script>
function chosenMuscle() {
	showExercises = document.getElementById(muscleGroups.value);
	var hideExercises = document.getElementsByClassName('muscleList');
	console.log(hideExercises);
	console.log(showExercises);
	for(var i = 0; i < hideExercises.length; i++){
		console.log(i);	
		hideExercises[i].style.display = 'none';
	}
		showExercises.style.display = 'block';
}

function saveExercise(event) {
	// console.log("testing", showExercises.id);
	var currentTable = document.getElementById(showExercises.id);
	// console.log(showExercises);
	console.log(currentTable);
	var input = document.getElementsByTagName('input');
	console.log(input);
	event.preventDefault()
}
// function addExercise(event) {
// 	console.log('new exercise added');
// 	// stops default behavior of submit button
// 	event.preventDefault() 
// }

</script>

<!-- get data from exercise table in database-->



<!-- when an option is selected, show the right div -->

 @foreach ($exercises as $muscleGroup) 
		<div class="muscleList" id="{{ $muscleGroup->name }}">	
			<!-- <form method="post"  action="/exercises/save" onsubmit="saveExercise(event)"> -->
				<form method="post" onsubmit="saveExercise(event)">
				{{ csrf_field() }}
					<table>
					 	<tr>
						    <th>Name</th>
						    <th>Weight</th> 
						    <th>Total Reps</th>
					 	</tr>
				@foreach ($muscleGroup->exercises as $exercise)
					<tr>
							<td>{{ $exercise->name }}</td>
							<td><input type="integer" name="Weight"></td>
					    	<td><input type="integer" name="Total Reps"></td>	
					</tr>
				@endforeach
					<tr>		  			
							<td><input id="newExerciseName" type="text" name="newExerciseName"></td>
							<td><input id="newExerciseWeight" type="integer" name="newExerciseWeight"></td>
					    	<td><input id="newExerciseReps" type="integer" name="newExerciseReps"></td>
		  			</tr>	
					</table>
							<button type="submit" id="submitButton">submit</button>
				</form>
        </div>     
 @endforeach


@endsection