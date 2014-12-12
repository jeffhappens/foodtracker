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

		public function searchByDate($month,$day,$year) {
			$data = [
				'query' => Meal::where('mealDate',$month.'/'.$day.'/'.$year)->get()
			];
			return View::make('search.date', $data);

		}


	}