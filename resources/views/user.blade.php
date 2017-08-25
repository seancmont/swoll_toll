@extends('layouts.app')

@section('content')

<button class="btn" id="toHome"><a href=/home>Home</a></button>
<!-- <button class="btn" id="newAvatar"><a href=/home>New Avatar</a></button> -->
		
		
		<h2>Fill in your info</h2>
			<table class="userProfile">
			  <tr>
			    <th>Username</th>
			    <th>Start Date</th> 
			    <th>Weight</th>
			    <th>Lift Level</th>
			  </tr>
			  <tr>
			    <td>Sean</td>
			    <td>7/11/17</td> 
			    <td>188</td>
			    <td>Beast</td>
			  </tr>
			  <tr>
  				<td><input id="userName" type="text" name="newExercises[][userName]"></td>
  				<td><input id="userStartDate" type="integer" name="newExercises[][userstartDate]"></td>
				<td><input id="userWeight" type="integer" name="newExercises[][userWeight]"></td>
		    	<td><input id="userLiftLevel" type="integer" name="newExercises[][userLiftLevel]"></td>
			  </tr>
			</table>

			<form enctype="multipart/form-data" action="uploader.php" method="POST">
			<input type="hidden" name="MAX_FILE_SIZE" value="100000" />
			Choose a file to upload: <input name="uploadedfile" type="file" /><br />
			<input type="button" value="Upload File" />
</form>
</body>
</html>

@endsection

