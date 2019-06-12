<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSubscriptionTable extends Migration {

	public function up()
	{
		Schema::create('subscription', function(Blueprint $table) {
			$table->increments('id');
			$table->string('email', 60);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('subscription');
	}
}