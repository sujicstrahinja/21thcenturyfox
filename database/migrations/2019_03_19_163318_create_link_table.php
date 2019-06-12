<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLinkTable extends Migration {

	public function up()
	{
		Schema::create('link', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 40);
			$table->string('href', 60);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('link');
	}
}