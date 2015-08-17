<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PedidoArticulo extends Model {

	//
    protected $table = 'PedidoArticulos';
	protected $fillabe = ['Cantidad_PedidoA'];
	protected $guarded = ['id'];

}
