<?php

	class HomeController extends BaseController {

		public function index() {

			$data = [
				'meals' => Meal::get()
			];

			return View::make('home.index', $data);
		}

		public function postMeal() {
			$input = Input::get();
			$meal = new Meal;
			$meal->title = $input['title'];
			$meal->ingredients = $input['ingredients'];
			$meal->course = $input['course'];
			$meal->save();
			return Redirect::to('/');
		}
	}
