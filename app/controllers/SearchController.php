<?php

	class SearchController extends BaseController {

		public function index() {
			$query = Input::get('query');
			$data = [
				'term' => $query,
				'query' => Meal::where('ingredients','LIKE','%'.$query.'%')
				->orWhere('title','LIKE','%'.$query.'%')
				->get()
			];
			return View::Make('search.index', $data);
		}


	}