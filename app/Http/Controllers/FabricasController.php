<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Fabrica as Fabrica;
use Illuminate\Http\Request;

class FabricasController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$Fabrica = Fabrica::all();
		return  \View::make('fabricalist' ,compact('fabrica'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return  \View::make('fabricas');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $Request)

	{
		
		$Fabrica = new Fabrica;
		$Fabrica->create($request->all());
		return redirect('Fabricas');

	}

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

	public function search(Request $Request )
	{
		//
		$Fabricas = Fabricas::where('Nombre_fabrica', 'like', '%' .$Request->Nombre_fabrica. '%')->get();
		return  \View::make('fabricalist', compact('fabrica'));
	}

}
