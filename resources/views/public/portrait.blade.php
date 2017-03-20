@extends('public.layout')

@section('content')

	<div class="container">

		@foreach($portrait as $port)

			<div class="row">
				<div class="col-xs-12">
					<h1>{{ $port->title }}</h1>
				</div>
			</div>
			<div class="row">
				@if($port->imagepath) 
					<div class="col-xs-3">
						<img src="{{ $port->imagepath }}" class="img-responsive">
					</div>
					<div class="col-xs-9">
						<p>{{ $port->name }}</p>
						{!! $port->shortDescription !!}
					</div>
				@else
					<div class="col-xs-12">
						<p>{{ $port->name }}</p>
						{!! $port->shortDescription !!}
					</div>
				@endif
			</div>
		
			
			

		@endforeach

	</div>

@stop