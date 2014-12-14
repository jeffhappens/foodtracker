<header>
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<h3><a href="/">Food Tracker App</a></h3>
			</div>
			<div class="col-md-2">
				<button class="btn btn-primary addMeal">New Meal</button>
				<button class="btn btn-default searchButton">Search</button>
			</div>
		</div>
	</div>
</header>
<div class="container">
	<div class="row">
		<div class="col-md-12 search">
			{{ Form::open(['url' => '/search', 'role' => 'form','class' => 'searchForm']) }}
			<p>Search by Date, Ingredients, Course, or Discomfort Level.</p>
				<div class="form-group">
					<label for="query">Search</label>
					<input type="text" name="query" class="form-control" />
				</div>
			{{ Form::close() }}
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			{{ Form::open(['role' => 'form', 'url' => '/', 'class' => 'add']) }}
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
				<label for="comments">Comments</label>
				<textarea name="comments" class="form-control"></textarea>
			</div>

			<div class="form-group">
				<button type="submit" name="submit" class="btn btn-primary btn-block btn-lg">Add Meal</button>
			</div>
			{{ Form::close() }}
		</div>
	</div>
</div>
