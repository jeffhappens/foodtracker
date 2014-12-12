<header>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3>
					Food Tracker
					<button class="btn btn-default pull-right searchButton">Search</button>
					<button class="btn btn-primary pull-right addMeal">New Meal</button>					
				</h3>
			</div>
		</div>
	</div>
</header>
<div class="container">
	<div class="row">
		<div class="col-md-12 search">
			{{ Form::open(['url' => '/search', 'role' => 'form','class' => 'searchForm']) }}
				<div class="form-group">
					<label for="query">Search</label>
					<input type="text" name="query" class="form-control" />
				</div>
			{{ Form::close() }}
		</div>
	</div>
</div>