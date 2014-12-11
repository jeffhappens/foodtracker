$(function() {

	$('.addMeal').on('click', function() {
		$('form.add').slideToggle('fast');		
	});
	
	$('.searchButton').on('click', function() {
		$('.searchForm').slideToggle('fast');
	})

	$('.datepicker').datepicker();

})