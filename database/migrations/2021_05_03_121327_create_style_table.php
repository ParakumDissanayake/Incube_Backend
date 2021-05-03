<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStyleTable extends Migration {

	public function up()
	{
		Schema::create('style', function(Blueprint $table) {
			$table->increments('styleID')->primary();
			$table->timestamps();
			$table->string('styleCode', 20);
			$table->string('styleName', 20);
			$table->integer('styleQuantity');
			$table->string('styleStatus');
			$table->string('styleType');
		});
	}

	public function down()
	{
		Schema::drop('style');
	}
}