<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model {

	//
	protected $table = 'Clientes';
	protected $fillabe = ['Nombre_Cliente', 'Direcciones_Cliente', 'Saldo','Descuento'];
	protected $guarded = ['id'];



}
