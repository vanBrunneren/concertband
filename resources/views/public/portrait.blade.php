@extends('public.layout')

@section('content')

	<div class="col-xs-10 col-xs-offset-1">

		@foreach($portrait as $port)

			<div class="row">
				<div class="col-xs-12 col-md-8 col-lg-8 ">
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
						<br><br><br>
					</div>
				@endif
			</div>
		
			
			

		@endforeach

	</div>

@stop