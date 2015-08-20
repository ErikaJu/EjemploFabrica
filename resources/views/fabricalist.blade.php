@extends('app')

@section('content')
<div class="container">
	<div class="row">
		    {!! Form::open (['route' => 'fabricas/search', 'method'=> 'post', 'novalidate', 'class'=> 'form-inline']) !!}
		    <div class="form-group">
		    	<label for="exampleInputName2">Nombre</label>
		    	<input type="Text" class="form-control" name="name">
		    </div>
			
			<button type="submit" class="btn btn-default" >Buscar</button>
			<a href= "{{ route ('fabrica.index') }}" class="btn btn-primary">All</a>
				<a href="{{ route ('fabrica.create') }}" class="btn btn-primary">Crear</a>
				{!! Form::close() !!}
				<br>
				<table class="table table-condensed table-striped table-bordered">
						<thead>
							<tr>
								<th>Nombre</th>
								<th>Telefono</th>
								
							
							</tr>
						</thead>
					<tbody>
						@foreach($fabrica as $fabrica)
							<tr>
								<td>{{ $fabrica->Nombre_Articulo }}</td>
								<td>{{ $fabrica->Telefono }}</td>
							

									<td> 
										<a class= "btn btn-primary btn-xs" href="{{ route('fabricas.edit', ['id'=> $fabricas->id] )}}" >Editar</a>
										<a class= "btn btn-danger btn-xs" href="{{ route('fabricas/destroy', ['id'=> $fabricas->id] )}}" >Eliminar</a>
									</td>
							</tr>
						@endforeach
					</tbody>
				</table>
		
	</div>
</div>

@endsection
