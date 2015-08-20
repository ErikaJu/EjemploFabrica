<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\articulos as articulos;
use Illuminate\Http\Request;

class ArticulosController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$articulos = articulos::all();
		return \View::make('list' ,compact('articulos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return \View::make('new');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//

		$articulos = new articulos;
		$articulos->create($request->all());
		return redirect('articulos');
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
		$articulos = articulos::find($id);
		 return  \View::make('update', compact('articulos'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request)
	{
		//

		{
			$articulos = articulos::find($request->id);
			$articulos->Nombre_Articulo = $request->Nombre_Articulo;
			$articulos->Existencia = $request->Existencia;
			$articulos->Descripcion = $request->Descripcion;
			$articulos->save();
			return redirect('articulos');



		}
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
		$articulos = articulos::find($id);
		$articulos->delete();
		return redirect()->back();
	}

	public function search(Request $Request )
	{
		//
		$articulos = articulos::where('Nombre_Articulo', 'like', '%' .$Request->Nombre_Articulo. '%')->get();
		return  \View::make('list', compact('articulos'));
	}

}
