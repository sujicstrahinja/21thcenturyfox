<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGenreTable extends Migration {

	public function up()
	{
		Schema::create('genre', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 40)->unique();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('genre');
	}
}