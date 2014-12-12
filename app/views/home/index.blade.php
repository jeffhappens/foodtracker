@extends('layouts.master')

@section('content')
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				{{ Form::open(['role' => 'form','class' => 'add']) }}
				<div class="form-group">
					<label for="mealDate">Meal Date</label>
					<input type="text" name="mealDate" class="form-control datepicker" placeholder="mm/dd/YYYY" />
				</div>

				<div class="form-group">
					<label for="title">Title</label>
					<input type="text" name="title" class="form-control" placeholder="Title" />
				</div>
				<div class="form-group">
					<label for="ingredients">Ingredients</label>
					<input type="text" name="ingredients" class="form-control" placeholder="Comma seperated values" />
				</div>
				<div class="form-group">
					<label for="course">Course</label>
					<select name="course" class="form-control">
						<option value="Breakfast">Breakfast</option>
						<option value="Lunch">Lunch</option>
						<option value="Dinner">Dinner</option>
					</select>
				</div>
				<div class="form-group">
					<label for="discomfort">Discomfort</label>
					<select name="discomfort" class="form-control">
						<option value="None">None</option>
						<option value="Low">Low</option>
						<option value="Medium">Medium</option>
						<option value="High">High</option>
					</select>
				</div>
				<div class="form-group">
					<button type="submit" name="submit" class="btn btn-primary btn-block">Add Meal</button>
				</div>
				{{ Form::close() }}
			</div>
		</div>
		<div class="row">
			@foreach($meals as $meal)
				<div class="col-md-12 meal">
					<p>{{ date('m/d/Y', strtotime($meal->mealDate)) }}</p>
					<h4>{{ $meal->title }}</h4>					
					<p><strong>Ingredients:</strong> {{ $meal->ingredients }}</p>
					<p><strong>Course:</strong> {{ $meal->course }}</p>
					<p><strong>Discomfort:</strong> {{ $meal->discomfort }}</p>
					<hr/>
				</div>				
			@endforeach			
		</div>
	</div>
</section>
@stop