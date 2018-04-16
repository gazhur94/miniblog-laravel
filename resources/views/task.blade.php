@extends('layouts.site')
@section('content')				
	<!-- <div class="countdown circled small" style="text-align:center">
		<a href="/add" class="time days" style="width:320px; color:white">Додати</a>
	</div>

	
	<div class="countdown circled small" style="text-align:center">
		<a href="/playerVSbot" class="time days" style="width:320px; color:white">1</a>
	</div> -->
    @if ($task)       
		<ul>	

			<li><h2>{{$task->body}}</h2></li>	
		</ul>
	@endif
@endsection		
