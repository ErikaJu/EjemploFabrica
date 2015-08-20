@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
		    {!! Form::model ($articulos, ['route'=> 'articulos.update', 'method'=> 'put', 'novalidate'])!!}

		    {!! Form::hidden('id', $articulos->id) !!}
		    <div class="form-group">
		    {!! Form::label('full_name', 'Nombre')!!}
		    {!! Form::text('Nombre_Articulo', null,['class'=> 'form-control', 'required'=> 'required'])!!}
		</div>
		<div class="form-group">
		    {!! Form::label('email', 'Existencia')!!}
		    {!! Form::text('Existencia', null,['class'=> 'form-control', 'required'=> 'required'])!!}
		</div>
		<div class="form-group">
		    {!! Form::label('email', 'Descripcion')!!}
		    {!! Form::text('Descripcion', null,['class'=> 'form-control', 'required'=> 'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::submit('Enviar', ['class'=> 'btn btn-success'])!!}
		</div>
		{!! Form::close() !!}
	</div>
</div>
</div>
@endsection