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

// function to save new input values as a new var currentTable
function saveExercise(event) {
	// var child = document.getElementById("muscleList").childNodes;
	// console.log(child);
	// console.log("testing", showExercises.id);
	var currentTable = document.getElementById(showExercises.id);
	// console.log(showExercises);
	console.log(currentTable);
	var input = document.getElementsByTagName('input');
	console.log(input);
	event.preventDefault()
}

// function addExerciseToMuscleGroup($db, $id, $muscle_groups_id) {
//     $stmt = "insert into muscle_groups_id (id, muscle_groups_id) values ("
//       . $id . ', ' . $muscle_groups_id . ');';
//     $result = pg_query($stmt);
//   }

// function getDb() {
//     $db = pg_connect("host=localhost port=5432 dbname=swoll_toll user=swoll_toll password=sean");
//     console.log("connecting with db");
//     return $db;
//   }
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
				<form method="post" action="/exercises">
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
							<input type="hidden" name="exercises[{{ $exercise->id }}][id]" value="{{ $exercise->id }}">
							<td><input type="integer" name="exercises[{{ $exercise->id }}][weight]"></td>
					    	<td><input type="integer" name="exercises[{{ $exercise->id }}][reps]"></td>	
					</tr>
				@endforeach
					<tr>		  			
							<td><input id="newExerciseName" type="text" name="newExercises[][name]"></td>
							<td><input id="newExerciseWeight" type="integer" name="newExercises[][weight]"></td>
					    	<td><input id="newExerciseReps" type="integer" name="newExercises[][reps]"></td>
		  			</tr>	
					</table>
							<button type="submit" id="submitButton">Submit</button>
							<button type="toCharts" id="toCharts"><a href=/charts>Charts</a></button>
				</form>
        </div>     

 @endforeach

<button type="toHome" id="toHome"><a href=/home>Home</a></button>
@endsection

