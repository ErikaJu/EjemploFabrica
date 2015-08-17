<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Articulos extends Model {

	//
	protected $table = 'Articulos';
	protected $fillabe = ['Nombre_Articulo', 'Existencia', 'Descripcion'];
	protected $guarded = ['id'];

}
