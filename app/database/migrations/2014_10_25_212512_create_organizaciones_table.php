<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrganizacionesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('organizaciones', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('ruc')->unique();
			$table->char('razonsocial', 11)->unique();
			$table->string('contacto')->index()->nullable();
			$table->string('rubro')->index()->nullable();
			$table->timestamps();

			$table->integer('persona_id')->unsigned();

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
		Schema::drop('organizaciones');
	}

}
