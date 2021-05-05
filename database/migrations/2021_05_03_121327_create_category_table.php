<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoryTable extends Migration {

	public function up()
	{
		Schema::create('categories', function(Blueprint $table) {
			$table->id();
			$table->string('categoryName');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('categories');
	}
}