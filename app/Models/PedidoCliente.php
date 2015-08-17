<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PedidoCliente extends Model {

	//
	protected $table = 'PedidoClientes';
	protected $fillabe = ['Fecha_PedidoC', 'Hora_PedidoC', 'Direccion'];
	protected $guarded = ['id'];

}
