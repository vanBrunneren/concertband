@extends('layouts.app')

@section('content')

	<div class="container">
		<h1>News erstellen</h1>
		<form action="" method="POST">
			<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
			<div class="form-group">
				<label for="title">Titel</label>
				<input class="form-control" type="text" name="title" id="title">
			</div>
			<div class="form-group">
				<label for="title">Text</label>
				<textarea name="text" class="form-control my-editor" rows="10"></textarea>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Speichern</button>
			</div>
		</form>
	</div>

@stop