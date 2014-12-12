$(function() {

	$('.addMeal').on('click', function() {		
		$('form.add').slideToggle(250);
		$('.results').toggleClass('fade');
	});
	
	$('.searchButton').on('click', function() {
		$('.searchForm').slideToggle('fast');
		$('.searchForm input[name=query]').focus();
		$('.results').toggleClass('fade');
	})

	$('.datepicker').datepicker();

})