@extends('layouts.site')
@section('content')				
	<!-- <div class="countdown circled small" style="text-align:center">
		<a href="/add" class="time days" style="width:320px; color:white">Додати</a>
	</div>

	
	<div class="countdown circled small" style="text-align:center">
		<a href="/playerVSbot" class="time days" style="width:320px; color:white">1</a>
	</div> -->
            
	<ul>
		@foreach ($tasks as $task)
			<li>{{$task->body}}</li>
		@endforeach
	</ul>
@endsection		
