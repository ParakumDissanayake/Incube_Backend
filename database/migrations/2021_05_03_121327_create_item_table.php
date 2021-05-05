<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateItemTable extends Migration {

	public function up()
	{
		Schema::create('items', function(Blueprint $table) {
			$table->id();
			$table->string('itemCode');
			$table->string('itemName');
			$table->integer('categoryID')->unsigned();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('items');
	}
}