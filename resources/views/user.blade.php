@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>The Swoll Toll</title>
</head>
<body>
	<div class="profileContainer"><span>
		
		<div>
			<img class="seanPic2" src="/images/weddingDomination.jpg" alt="sean-dominating-dance-floor">
		</div>
		<h2>User Profile</h2>
		<p>Dance floor domination begins with stretching and squats</p>
			<table class="userProfile">
			  <tr>
			    <th>Username</th>
			    <th>Start Date</th> 
			    <th>Weight</th>
			    <th>Level</th>
			  </tr>
			  <tr>
			    <td>montymonty41</td>
			    <td>7/11/17</td> 
			    <td>188</td>
			    <td>Beast</td>
			  </tr>
			</table>
		
	</span></div>
</body>
</html>
<button type="toHome" id="toHome"><a href=/home>Home</a></button>

@endsection

