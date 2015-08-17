@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
		    {!! Form::open (['route'=> 'articulo/search', 'method'=> 'post', 'novalidate', 'class'=>form=inline])!!}
		    <div class="form-group">
		    	<label for="exampleInputName2">Nombre</label>
		    	<input type="Text" class="form-control" name="name">
		    </div>
			<div class="form-group">
			    <label for="exampleInputName2">Existencia</label>
		    	<input type="Text" class="form-control" name="Existen">
			</div>
			<div class="form-group">
			    <label for="exampleInputName2">Descripcion</label>
			    	<input type="Text" class="form-control" name="Descrip">
			</div>
			<button type="submit" class="btn btn-default" >Buscar</button>
			<a href= "{{ route ('movie.index')}}" class="btn btn-primary">All</a>
				<a href="{{ route ('movie.create')}}" class="btn btn-primary">Create</a>
				{!! Form::close() !!}
				<br>
				<table class="table table-condensed table-striped table-bordered">
					<thead>
						<tr>
							<th>Nombre</th>
							<th>Existencia</th>
							<th>Descripcion</th>
							<th>Action</th>
						</tr>
					</thead>
				</body>
				@foreach($Articulo as $Articulo)
				<tr>
					<td>{{$Articulo->Nombre}}</td>
					<td>{{$Articulo->Existencia}}</td>
					<td>{{$Articulo->Descripcion}}</td>

					<td> 
						<a class= "btn btn-primary btn-xs" href="{{route('Articulo.edit', ['id'=>$Articulo->id]}}">Editar</a>
						<a class= "btn btn-danger btn-xs" href="{{route('Articulo.destroy', ['id'=>$Articulo->id]}}">Eliminar</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>

@endsection
