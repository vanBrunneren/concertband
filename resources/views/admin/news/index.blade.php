@extends('layouts.app')

@section('content')

	<div class="container">
		<form action="" method="POST">
			<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
			<h1>News</h1>
			<div class="form-group">
				<a href="/admin/news/create"><button type="button" class="btn btn-primary">Neue News erfassen</button></a>
			</div>
			<table class="table table-hover">
				<thead>
					<tr>
						<th style="width: 160px">Datum</th>
						<th>Titel</th>
					</tr>
				</thead>
				<tbody>
				@foreach($news as $entry)

					<tr>
						<td>{{ date('d.m.Y', strtotime($entry->created_at)) }}</td>
						<td><a href="/admin/news/edit/{{ $entry->id }}">{{ $entry->title }}</a></td>
						<td class="text-right">
							<a class="menu-link" href="/admin/news/edit/{{ $entry->id }}">
								<i class="fa fa-pencil"></i>
							</a>
							<a class="menu-link" href="/admin/news/delete/{{ $entry->id }}">
								<i class="fa fa-times"></i>
							</a>
						</td>

					</tr>

				@endforeach
				</tbody>
			</table>
		</form>
	</div>

@stop