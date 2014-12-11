@extends('layouts.master')

@section('content')
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Search Results for "{{ $term }}"</h2>
				@foreach($query as $que)
					<h3>{{ $que->title }}</h3>
					<p>{{ $que->ingredients }}</p>
					<p>{{ $que->course }}</p>
					<p>{{ $que->mealDate }}</p>
				@endforeach
			</div>
		</div>
	</div>
</section>
@stop