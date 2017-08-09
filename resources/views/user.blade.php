@extends('layouts.app')

@section('content')

<button class="btn" id="toHome"><a href=/home>Home</a></button>

	<div class="profileContainer"><span>
		
		<div>
			<img class="seanPic2" src="/images/weddingDomination.jpg" alt="sean-dominating-dance-floor">
		</div>
		<h2>Fill in your info and update that profile pic, playa</h2>
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

@endsection

