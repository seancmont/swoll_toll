@extends('layouts.app')

@section('content')

	<h1>Muscle Groups</h1>

	@foreach ($muscle_groups as $muscle_group)

		<h2>{{ $muscle_group->name }}</h2>

		@foreach ($muscle_group->exercises as $exercise)

			<h3>{{ $exercise->name }}</h3>
			
		@endforeach

	@endforeach

@stop