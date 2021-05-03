<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('styleItems', function(Blueprint $table) {
			$table->foreign('styleID')->references('styleID')->on('styleItems')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('item', function(Blueprint $table) {
			$table->foreign('categoryID')->references('categoryID')->on('category')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('styleItems', function(Blueprint $table) {
			$table->dropForeign('styleItems_styleID_foreign');
		});
		Schema::table('item', function(Blueprint $table) {
			$table->dropForeign('item_categoryID_foreign');
		});
	}
}