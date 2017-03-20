@extends('layouts.app')

@section('content')

	<div class="container">
		<h1>News bearbeiten</h1>
		<form action="" method="POST">
			<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
			<div class="form-group">
				<label for="title">Titel</label>
				<input class="form-control" type="text" name="title" id="title" value="{{ $news->title }}">
			</div>
			<div class="form-group">
				<label for="date">Datum</label>
				<p>Aktuelles Datum: {{ date('d.m.Y', strtotime($news->date)) }}</p>
				 <div class='input-group date' id='datetimepicker1'>
                    <input type='text' name="date" class="form-control" id="date" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
			</div>
			<div class="form-group">
				<label for="title">Text</label>
				<textarea name="text" class="form-control my-editor" rows="10">{{ $news->text }}</textarea>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Speichern</button>
			</div>
		</form>
	</div>

@stop