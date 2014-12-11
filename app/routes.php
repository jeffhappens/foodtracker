<?php

Route::get('/','HomeController@index');
Route::post('/','HomeController@postMeal');

Route::post('/search','SearchController@index');