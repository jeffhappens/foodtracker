@extends('layouts.master')

@section('content')
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Search Results for "{{ Request::segment(2) }}/{{ Request::segment(3) }}/{{ Request::segment(4) }}"</h2>
				<table class="table" role="table">
					<tr>
						<th>Date</th>
						<th>Title</th>
						<th>Ingredients</th>
						<th>Course</th>
						<th>Discomfort</th>
					</tr>
					@foreach($query as $que)
					<tr>
						<td>{{ $que->mealDate }}</td>
						<td>{{ $que->title }}</td>
						<td>{{ $que->ingredients }}</td>
						<td>{{ $que->course }}</td>
						<td>{{ $que->discomfort }}</td>
					</tr>
					@endforeach
				</table>
			</div>
		</div>
	</div>
</section>
@stop