@extends('layouts.app')

@section('content')

	@if(session()->has('message'))
		<div class="alert alert-success">
			{{ session()->get('message') }}
		</div>
	@endif

	<div class="container">
		<form action="" method="POST">
			<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
			<h1>Passwort ändern</h1>
			<div class="form-group">
				<label for="pw">Neues Passwort:</label>
				<input class="form-control" type="password" name="pw" id="pw">
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Absenden</button>
			</div>
		</form>
	</div>

@stop