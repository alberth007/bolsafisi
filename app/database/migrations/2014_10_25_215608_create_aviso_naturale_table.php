<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAvisoNaturaleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('aviso_naturale', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('aviso_id')->unsigned()->index();
			$table->foreign('aviso_id')->references('id')->on('avisos')->onDelete('cascade');
			$table->integer('naturale_id')->unsigned()->index();
			$table->foreign('naturale_id')->references('id')->on('naturales')->onDelete('cascade');
			$table->string('estado');
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
		Schema::drop('aviso_naturale');
	}

}
