<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>The Swoll Toll</title>
</head>
<body>
	<h1>Exercises</h1>
	<p>Choose a muscle group for the day</p>
		<!-- list of each muscle group -->
		<ul>
            @foreach ($muscleGroups as $muscleGroup)
                <li>{{ $muscleGroup }}</li>
            @endforeach
        </ul>
</body>
</html>