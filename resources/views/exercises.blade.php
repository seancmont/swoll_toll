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
		hideExercises[i].style.visibility = 'hidden';
	}
		showExercises.style.visibility = 'visible';
}
</script>

<!-- get data from exercise table in database-->



<!-- when an option is selected, show the right div -->

 @foreach ($exercises as $muscleGroup) 
		<div class="muscleList" id="{{ $muscleGroup->name }}">		
				@foreach ($muscleGroup->exercises as $exercise)
					{{ $exercise->name }}
				@endforeach
        </div>        
            
 @endforeach



@endsection