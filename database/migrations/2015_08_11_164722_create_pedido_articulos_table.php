<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidoArticulosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pedido_articulos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->String('Cantidad_PedidoA');
			$table->integer('Fk_IdArticulo')->unsigned();
			$table->integer('Fk_IdPedidoCliente')->unsigned();
			$table->timestamps();

			$table->foreign('Fk_IdArticulo')->references('Id')->on('Articulos');
			$table->foreign('Fk_IdPedidoCliente')->references('Id')->on('Pedido_Clientes');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pedido_articulos');
	}

}
