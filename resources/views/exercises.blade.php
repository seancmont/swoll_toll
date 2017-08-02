@extends('layouts.app')

@section('content')

	<h1>Exercises</h1>
	<p>Choose a muscle group for the day</p>
		<!-- list of each muscle group -->
		<ul>
            @foreach ($exercises as $muscleGroup)
                <li>{{ $muscleGroup->name }}</li>
            @endforeach
        </ul>
        
<script>
function chosenMuscle() {
var showExercises = document.getElementById(muscleGroups.value);
showExercises.style.display = 'none';
}
</script>

<label for="muscleGroups">Choose today's muscle group for your lift: </label>
<select id="muscleGroups" onchange="chosenMuscle()">
  <option>Please select</option>
  <option value="chest">Chest</option>
  <option value="back">Back</option>
  <option value="legs">Legs</option>
  <option value="shoulders">Shoulders</option>
  <option value="biceps">Biceps</option>
  <option value="triceps">Triceps</option>
  <option value="abs">Abs</option>
</select>

<script>
	var muscleArray = ['chest', 'shoulders'];
	// for loop that sets all muscles group displays to none
	var muscleGroups = document.getElementById("muscleGroups");
	console.log(muscleGroups.value);
	// function that runs when group is chosen from the dropdown
	function chosenMuscle() {
		muscleGroups = document.getElementById("muscleGroups");

		console.log("Hey Sean", muscleGroups.value)
		var showExercises = document.getElementById(muscleGroups.value);
		console.log(showExercises);
		showExercises.style.display = 'block';
	}
// muscleGroups.onchange = function () {
// 	var selectedGroup = this.value;
// 	var muscleGroup = document.getElementById("value");
// 	value.style.display = 'none';
// }
</script>

<!-- error.style.display = 'none';
output.style.display = 'block'; -->


<!-- when an option is selected, show the right div -->

<div id="chest"> <!-- hidden by default -->
 "Flat Bench Press"
 "Incline Bench Press"
 "Decline Bench Press"
 "Pec Fly"
 "Chest Dips"
</div>

<div id="shoulders"> <!-- hidden by default -->
 "Shoulder Press"
 "Front Lateral Raises"
 "Side Lateral Raises"
 "Upright Barbell Row"
 "Shrugs"
</div>

@endsection