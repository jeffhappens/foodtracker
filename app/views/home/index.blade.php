@extends('layouts.master')

@section('content')
<section>
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
@stop