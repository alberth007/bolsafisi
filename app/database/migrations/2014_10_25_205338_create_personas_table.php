<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePersonasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('personas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre')->index();
			$table->string('direccion')->index();
			$table->string('telefono')->unique()->nullable();
			$table->string('email')->unique()->nullable();
			$table->timestamps();

			// unsigned: Solo acepta números positivos.
			$table->integer('usuario_id')->unsigned();
			$table->foreign('usuario_id')
				  ->references('id')
				  ->on('usuarios')
				  ->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('personas');
	}

}
