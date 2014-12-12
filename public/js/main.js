$(function() {

	$('.addMeal').on('click', function() {
		
		$('form.add').slideToggle(250);
			$('.mealTable').toggleClass('fade');
	});
	
	$('.searchButton').on('click', function() {
		$('.searchForm').slideToggle('fast');
	})

	$('.datepicker').datepicker();
})