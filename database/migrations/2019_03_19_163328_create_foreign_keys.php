<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('user', function(Blueprint $table) {
			$table->foreign('role_id')->references('id')->on('role')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('genre_movie', function(Blueprint $table) {
			$table->foreign('genre_id')->references('id')->on('genre')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('genre_movie', function(Blueprint $table) {
			$table->foreign('movie_id')->references('id')->on('movie')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('user', function(Blueprint $table) {
			$table->dropForeign('user_role_id_foreign');
		});
		Schema::table('genre_movie', function(Blueprint $table) {
			$table->dropForeign('genre_movie_genre_id_foreign');
		});
		Schema::table('genre_movie', function(Blueprint $table) {
			$table->dropForeign('genre_movie_movie_id_foreign');
		});
	}
}