<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLesclientsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lesclients', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('client_id');
			$table->string('civilite');
     		$table->string('nom');
      		$table->string('prenom');
      		$table->string('email');
      		$table->integer('telephone');
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
		Schema::drop('lesclients');
	}

}
