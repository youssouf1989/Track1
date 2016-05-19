<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clients', function(Blueprint $table)
		{
			$table->increments('clientID');
			$table->string('nom',(50));
			$table->string('prenom',(50));
			$table->string('email',(50));
			$table->integer('telMobile');
			$table->integer('telFixe');
			$table->integer('telFax');
			$table->string('raisonSociale');
			$table->string('civilite',(20));
			$table->integer('numRegistreCommerce');
			$table->integer('numFiscale');
			$table->string('logo',(50));
			$table->string('siteWeb',(50));
			$table->timestamp('dateEnregistrement');
			$table->date('datedebutContrat');
			$table->date('dateFinContrat');
			$table->string('statut');
			$table->integer('espacePriveID');
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
		Schema::drop('clients');
	}

}
