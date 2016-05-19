<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHsoub extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		  Schema::create('drinks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',75)->unique();
            $table->text('comments')->nullable();
            $table->integer('rating');
            $table->date('juice_date');
            $table->timestamps();        
        });
    }

    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down() {
        Schema::dropIfExists('drinks');
	}

}
