<?php

	class HomeController extends BaseController {

		public function index() {

			$data = [
				'meals' => Meal::orderby('mealDate','desc')->get()
			];

			return View::make('home.index', $data);
		}

		public function postMeal() {
			$input = Input::get();
			$rules = [
				'title' => 'required',
				'ingredients' => 'required',
				'course' => 'required',
				'mealDate' => 'required'
			];
			$validator = Validator::make($input,$rules);
			if($validator->fails()) {
				return Redirect::to('/');
			}
			$meal = new Meal;
			$meal->title = $input['title'];
			$meal->ingredients = $input['ingredients'];
			$meal->course = $input['course'];
			$meal->mealDate = $input['mealDate'];
			$meal->discomfort = $input['discomfort'];
			$meal->save();
			return Redirect::to('/');
		}
	}
