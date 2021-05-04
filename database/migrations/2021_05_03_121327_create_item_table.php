<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateItemTable extends Migration {

	public function up()
	{
		Schema::create('items', function(Blueprint $table) {
			$table->string('itemCode');
			$table->integer('categoryID')->unsigned();
			$table->string('itemName');
		});
	}

	public function down()
	{
		Schema::drop('items');
	}
}