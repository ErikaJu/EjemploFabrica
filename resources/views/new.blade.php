@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
		    {!! Form::open (['route'=> 'articulo.store', 'method'=> 'post', 'novalidate'])!!}
		    <div class="form-group">
		    {!! Form::label('full_name', 'Nombre')!!}
		    {!! Form::text('name', null,['class'=> 'form-control', 'required'=> 'required'])!!}
		</div>
		<div class="form-group">
		    {!! Form::label('full_name', 'Existencia')!!}
		    {!! Form::text('Existen', null,['class'=> 'form-control', 'required'=> 'required'])!!}
		</div>
		<div class="form-group">
		    {!! Form::label('full_name', 'Descripcion')!!}
		    {!! Form::text('Descrip', null,['class'=> 'form-control', 'required'=> 'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::submit('Enviar', ['class'=> 'btn btn-success'])!!}
		</div>
		{!! Form::close()!}
	</div>
</div>
</div>
@endsection
