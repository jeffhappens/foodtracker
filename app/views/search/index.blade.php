@extends('layouts.master')

@section('content')
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12 results">
				
				<h2>Search Results for "{{ $term }}"</h2>
				@if($query->isEmpty())
					<p>No results found :(</p>
				@else
					<table class="table table-hover table-bordered table-striped mealTable" role="table">
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
				@endif
			</div>
		</div>
	</div>
</section>
@stop