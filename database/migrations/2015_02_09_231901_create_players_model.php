<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersModel extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		 Schema::create('players', function($table)
		    {
		        $table->increments('id');
		        $table->string('numero')->unique();
		        $table->string('posicion');
		        $table->string('lugar-nacimiento');
		        $table->string('fecha');
		        $table->string('peso');
		        $table->string('estatura');
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
		//
	}

}
