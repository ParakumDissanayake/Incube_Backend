<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStyleTable extends Migration {

	public function up()
	{
		Schema::create('styles', function(Blueprint $table) {
			$table->id();
			$table->string('styleNo', 20);
			$table->string('styleName', 20);
			$table->double('styleQuantity',8,1);
			$table->string('styleStatus');
			$table->string('styleType');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('styles');
	}
}