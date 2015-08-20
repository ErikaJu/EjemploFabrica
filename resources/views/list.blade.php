@extends('app')

@section('content')
<div class="container">
	<div class="row">
		    {!! Form::open (['route' => 'articulos/search', 'method'=> 'post', 'novalidate', 'class'=> 'form-inline']) !!}
		    <div class="form-group">
		    	<label for="exampleInputName2">Nombre</label>
		    	<input type="Text" class="form-control" name="name">
		    </div>
			
			<button type="submit" class="btn btn-default" >Buscar</button>
			<a href= "{{ route ('articulos.index') }}" class="btn btn-primary">All</a>
				<a href="{{ route ('articulos.create') }}" class="btn btn-primary">Crear</a>
				{!! Form::close() !!}
				<br>
				<table class="table table-condensed table-striped table-bordered">
						<thead>
							<tr>
								<th>Nombre</th>
								<th>Existencia</th>
								<th>Descripcion</th>
							
							</tr>
						</thead>
					<tbody>
						@foreach($articulos as $articulos)
							<tr>
								<td>{{ $articulos->Nombre_Articulo }}</td>
								<td>{{ $articulos->Existencia }}</td>
								<td>{{ $articulos->Descripcion }}</td>

									<td> 
										<a class= "btn btn-primary btn-xs" href="{{ route('articulos.edit', ['id'=> $articulos->id] )}}" >Editar</a>
										<a class= "btn btn-danger btn-xs" href="{{ route('articulos/destroy', ['id'=> $articulos->id] )}}" >Eliminar</a>
									</td>
							</tr>
						@endforeach
					</tbody>
				</table>
		
	</div>
</div>

@endsection
