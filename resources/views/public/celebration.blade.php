@extends('public.layout')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-xs-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 table-responsive">
				{!! $celebration->text !!}
			</div>
		</div>
	</div>

@stop