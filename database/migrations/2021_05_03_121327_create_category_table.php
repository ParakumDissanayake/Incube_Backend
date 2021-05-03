<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoryTable extends Migration {

	public function up()
	{
		Schema::create('categories', function(Blueprint $table) {
			$table->timestamps();
			$table->integer('categoryID')->primary()->unsigned();
			$table->string('categoryName');
		});
	}

	public function down()
	{
		Schema::drop('categories');
	}
}