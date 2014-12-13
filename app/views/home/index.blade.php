@extends('layouts.master')

@section('content')
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12 results">
				<table class="table table-hover table-bordered table-striped table-responsive mealTable" role="table">
					<tr>
						<th>Date</th>
						<th>Title</th>
						<th>Ingredients</th>
						<th>Course</th>
						<th>Discomfort</th>
					</tr>
					@foreach($meals as $meal)
					<tr>
						<td>{{ date('m/d/Y', strtotime($meal->mealDate)) }}</td>
						<td>{{ $meal->title }}</td>
						<td>{{ $meal->ingredients }}</td>
						<td>{{ $meal->course }}</td>
						<td>{{ $meal->discomfort }}</td>
					</tr>
					@endforeach
				</table>
			</div>
		</div>
	</div>
</section>

@stop