@extends('layouts.master')

@section('content')
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Food Tracker</h2>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				{{ Form::open(['role' => 'form']) }}
				<div class="form-group">
					<label for="title">Title</label>
					<input type="text" name="title" class="form-control" placeholder="Title" />
				</div>
				<div class="form-group">
					<label for="ingredients">Ingredients</label>
					<input type="text" name="ingredients" class="form-control" placeholder="Comma seperated values" />
				</div>
				<div class="form-group">
					<select name="course" class="form-control">
						<option value="Breakfast">Breakfast</option>
						<option value="Lunch">Lunch</option>
						<option value="Dinner">Dinner</option>
					</select>
				</div>
				<div class="form-group">
					<button type="submit" name="submit" class="btn btn-primary">Add Meal</button>
				</div>
				{{ Form::close() }}
			</div>
		</div>
		<div class="row">
			@foreach($meals as $meal)
				<div class="col-md-12 meal">
					<h4>{{ $meal->title }}</h4>
					<p>{{ date('m/d/Y', strtotime($meal->created_at)) }}</p>
					<p><strong>Ingredients:</strong></p>
					<p>{{ $meal->ingredients }}</p>
					<p><strong>Course:</strong> {{ $meal->course }}</p>
				</div>				
			@endforeach			
		</div>
	</div>
</section>
@stop