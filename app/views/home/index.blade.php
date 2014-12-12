@extends('layouts.master')

@section('content')
<!-- <section>
	<div class="container">
		<div class="row">
			@foreach($meals as $meal)
				<div class="col-md-12 meal">
					<p class="date">{{ date('m/d/Y', strtotime($meal->mealDate)) }}</p>
					<h4>{{ $meal->title }}</h4>					
					<p><strong>Ingredients:</strong> {{ $meal->ingredients }}</p>
					<p><strong>Course:</strong> {{ $meal->course }}</p>
					<p><strong>Discomfort:</strong> {{ $meal->discomfort }}</p>
				</div>				
			@endforeach			
		</div>
	</div>
</section>
 --><section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<table class="table table-striped mealTable" role="table">
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