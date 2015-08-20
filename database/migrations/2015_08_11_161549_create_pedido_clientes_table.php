<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidoClientesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pedido_clientes', function(Blueprint $table)
		{
		$table->increments('id');
		$table->Date('Fecha_PedidoC');
		$table->Time('Hora_PedidoC');
		$table->String('Direccion', 30);
		$table->timestamps();

		$table->integer('Fk_IdCliente')-> unsigned();

		$table->foreign('Fk_IdCliente')->references('id')->on('clientes');


		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pedido_clientes');
	}

}
