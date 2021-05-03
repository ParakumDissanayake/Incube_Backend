<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateItemTable extends Migration {

	public function up()
	{
		Schema::create('item', function(Blueprint $table) {
			$table->integer('itemID')->primary();
			$table->integer('categoryID')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('item');
	}
}