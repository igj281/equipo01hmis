<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Events extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('eventos', function($table)
        {
            $table->increments('id');
            $table->string('nombre');
            $table->date('fecha');
            $table->string('hora');
            $table->string('tipo');
            $table->string('aforo');
            $table->string('descripcion');
            
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
		Schema::drop('eventos');
	}

}
