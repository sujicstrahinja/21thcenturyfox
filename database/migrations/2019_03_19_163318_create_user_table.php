<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserTable extends Migration {

	public function up()
	{
		Schema::create('user', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 40)->unique();
			$table->string('email', 60)->unique();
			$table->string('password', 60);
			$table->integer('role_id')->unsigned();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('user');
	}
}