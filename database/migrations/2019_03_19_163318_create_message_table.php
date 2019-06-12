<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMessageTable extends Migration {

	public function up()
	{
		Schema::create('message', function(Blueprint $table) {
			$table->increments('id');
			$table->string('first_name', 30);
			$table->string('last_name', 30);
			$table->string('email', 60);
			$table->string('subject', 40);
			$table->text('message');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('message');
	}
}