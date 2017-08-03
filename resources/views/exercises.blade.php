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

function addExercise(event) {
	console.log('new exercise submitted');
	// stops default behavior of submit button
	event.preventDefault() 
}
</script>

<!-- get data from exercise table in database-->



<!-- when an option is selected, show the right div -->

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
				    <td>{{ $exercise->name }}</td>
				    <td>{{ $exercise->weight }}</td> 
				    <td>{{ $exercise->total_reps }}</td>
	  			</tr>
	  			<!-- <tr>
		  			<td><form onsubmit="helloWorld(event);">New Exercise
							<input type="text" name="Name">
							<input type="text" name="Weight">
					    	<input type="text" name="Total Reps">
					    	<input type="submit">
						</form>
	  				</td>
	  			</tr> -->	
			@endforeach

			</table>
			<!-- upon submit, page refreshes by default. event is submit occurring. pass function submit event to tell it to stop default action (refresh) -->
			<form onsubmit="addExercise(event);">New Exercise
				<input type="text">
				<input type="text">
		    	<input type="text">
		    	<input type="submit">
			</form>
        </div>     
 @endforeach


@endsection