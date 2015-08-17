<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fabrica extends Model {

	//
	protected $table = 'Fabricas';
	protected $fillabe = ['Nombre_Fabrica', 'Telefono'];
	protected $guarded = ['id'];


}
