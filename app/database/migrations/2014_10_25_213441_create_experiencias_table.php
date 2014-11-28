<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExperienciasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('experiencias', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('puesto');
			$table->date('fecha_i');
			$table->date('fecha_f');
			$table->string('empresa_n');
			$table->string('area')->nullable();
			$table->longText('descripcion')->nullable();
			$table->integer('naturale_id')->unsigned();
			$table->timestamps();

			$table->foreign('naturale_id')
			      ->references('id')
			      ->on('naturales')
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
		Schema::drop('experiencias');
	}

}
