<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Cliente as Cliente;
use Illuminate\Http\Request;

class ClientesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request  $Request)
	{
		$Cliente=> new Cliente;
		$Cliente->Nombre_Cliente=$Request->Nombre_Cliente;
		$Cliente->Direcciones_Cliente=$Request->Direcciones_Cliente;
		$Cliente->Saldo=$Request->Saldo;
		$Cliente->Limite_Credito=$Request->Limite_Credito;
		$Cliente->Descuento=$Request->Descuento;
		$Clienete->save();
		return redirect('Cliente');

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
