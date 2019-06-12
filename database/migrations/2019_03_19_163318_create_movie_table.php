<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMovieTable extends Migration {

	public function up()
	{
		Schema::create('movie', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 40);
			$table->text('description');
			$table->text('headline');
			$table->text('image');
			$table->text('thumbnail');
			$table->string('youtube_link', 16);
			$table->integer('year');
			$table->boolean('featured');
			$table->float('rating');
			$table->integer('viewed');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('movie');
	}
}