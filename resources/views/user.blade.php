@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>The Swoll Toll</title>
</head>
<body>
	<div class="container">
		
		<div id="profilePic">
			<img src="{{asset('resources/assets/images/seven-sacred-pools.JPG')}}" alt="seven-sacred-pools" style="width:304px;height:228px;">
		</div>
		<h1>User Profile</h1>
		<p>Let's get to know each other</p>
			<table class="userProfile">
			  <tr>
			    <th>Username</th>
			    <th>Start Date</th> 
			    <th>Weight</th>
			  </tr>
			  <tr>
			    <td>montymonty41</td>
			    <td>7/11/17</td> 
			    <td>188</td>
			  </tr>
			</table>
		
	</div>
</body>
</html>
<button type="toHome" id="toHome"><a href=/home>Home</a></button>

@endsection

