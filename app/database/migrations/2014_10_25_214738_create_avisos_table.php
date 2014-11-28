<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAvisosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('avisos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('titulo')->index();
			$table->string('area');
			$table->longText('funciones');
			$table->longText('caracteristicas')->nullable();
			$table->string('departamento')->index();
			$table->string('provincia')->index();
			$table->string('distrito')->index();
			$table->string('salario')->nullable();
			$table->string('tipo')->index()->nullable();
			$table->date('fecha_limite');
			$table->timestamps();

			$table->integer('organizacione_id')->unsigned();
			$table->foreign('organizacione_id')
			      ->references('id')
			      ->on('organizaciones');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('avisos');
	}

}
