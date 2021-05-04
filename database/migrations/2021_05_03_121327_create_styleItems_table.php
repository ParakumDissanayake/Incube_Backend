<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStyleItemsTable extends Migration {

	public function up()
	{
		Schema::create('styleItems', function(Blueprint $table) {
			$table->integer('styleID')->unsigned();
			$table->timestamps();
			$table->integer('itemID')->unsigned();
			$table->integer('consumption');
		});
	}

	public function down()
	{
		Schema::drop('styleItems');
	}
}