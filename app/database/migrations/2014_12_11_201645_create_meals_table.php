<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMealsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('meals', function($table) {
			$table->string('title',100);
			$table->text('ingredients');
			$table->string('course',100);
			$table->string('mealDate',20);
			$table->string('discomfort',100);
			$table->timestamps = true;
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('meals');
	}

}
