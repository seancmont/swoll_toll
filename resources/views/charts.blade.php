@extends('layouts.app')

@section('content')

<button class="btn" id="toHome"><a href=/home>Home</a></button>
<button class="btn" id="toWorkouts"><a href=/workouts>Workouts</a></button>

<h2>Chart those mad gainz </h2>
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
			@endforeach
				
			</table>
			<br />
			<p>Looking swoll, bro!</p>
			<br />
        </div>        
 @endforeach

  <img class="lineChart" src="/images/lineChart.jpg" alt="lineChart">

 @endsection