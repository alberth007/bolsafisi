<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNaturalesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('naturales', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('apellido');
			$table->char('sexo', 1);
			$table->string('dni')->unique();
			$table->integer('ciclo');
			$table->integer('eap_id')->unsigned();
			$table->integer('persona_id')->unsigned();
			$table->timestamps();

			$table->foreign('eap_id')
				  ->references('id')
				  ->on('eaps');
			$table->foreign('persona_id')
			      ->references('id')
			      ->on('personas');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('naturales');
	}

}
