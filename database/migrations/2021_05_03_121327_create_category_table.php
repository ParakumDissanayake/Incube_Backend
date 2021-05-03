<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoryTable extends Migration {

	public function up()
	{
		Schema::create('category', function(Blueprint $table) {
			$table->timestamps();
			$table->integer('categoryID')->primary()->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('category');
	}
}