<?php

	class SearchController extends BaseController {

		public function index() {
			$query = Input::get('query');
			$data = [
				'term' => $query,
				'query' => Meal::where('ingredients','LIKE','%'.$query.'%')
				->orWhere('title','LIKE','%'.$query.'%')
				->orWhere('mealDate','LIKE','%'.$query.'%')
				->orWhere('course','LIKE','%'.$query.'%')
				->orWhere('discomfort','LIKE','%'.$query.'%')
				->orderBy('mealDate','desc')
				->get()
			];
			return View::Make('search.index', $data);
		}
	}