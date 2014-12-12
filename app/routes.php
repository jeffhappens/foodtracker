<?php

Route::get('/','HomeController@index');
Route::post('/','HomeController@postMeal');

Route::post('/search','SearchController@index');

Route::get('/search/{month}/{day}/{year}','SearchController@searchByDate');

Route::get('/json', function() {
	return Meal::get();
});