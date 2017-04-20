@extends('public.layout')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
				{!! $home->text !!}
			</div>
		</div>
	</div>

@stop