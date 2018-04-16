@extends('layouts.site')

@section('content')			
	<form class="form-horizontal" method='POST' action="{{route('articleStore')}}">
		<div class="control-group">
			<label>Введіть назву</label>
			<div class="controls">
				<input type="text"  name="title" placeholder="Назва">
			</div>
		</div>
		<div class="control-group">
			<label >Введіть текст</label>
			<div class="controls">
				<textarea type="text" name="text" placeholder="Текст"></textarea>
			</div>
		</div>
		<br>
		<div>
			<button type="submit" class="btn">Войти</button>
			
		</div>
	{{ csrf_field() }}
	</form>

@endsection