<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlyersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('flyers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer("flyer_id")->unsigned()->index();
			$table->foreign('flyer_id')->references('id')->on('users')->onDelete('cascade');
			$table->string('street',50);
			$table->string('city',40);
			$table->string('zip',10);
			$table->string('state',20);
			$table->string('country',20);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('flyers');
	}

}
