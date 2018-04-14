@extends('layouts.site')
@section('content')				
	<div class="countdown circled small" style="text-align:center">
		<a href="/add" class="time days" style="width:320px; color:white">Додати</a>
	</div>

	
	<div class="countdown circled small" style="text-align:center">
		<a href="/playerVSbot" class="time days" style="width:320px; color:white">{{$articles->title}}</a>
	</div>
            
@endsection		
