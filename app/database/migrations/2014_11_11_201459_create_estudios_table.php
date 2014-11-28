<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEstudiosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('estudios', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('grado')->nullable();
			$table->string('estado');
			$table->string('estudio');
			$table->integer('naturale_id')->unsigned();
			$table->timestamps();

			$table->foreign('naturale_id')
			      ->references('id')
			      ->on('naturales');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('estudios');
	}

}
