<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCantidadsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cantidads', function(Blueprint $table)
		{
			$table->increments('id');
			$table->String('Cantidad_cantidad');
			$table->integer('Fk_IdFabrica')-> unsigned();
			$table->integer('Fk_IdArticulo')-> unsigned();

			$table->foreign('Fk_IdFabrica')->references('Id')->on('Fabricas');
			$table->foreign('Fk_IdArticulo')->references('Id')->on('Articulos');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cantidads');
	}

}
