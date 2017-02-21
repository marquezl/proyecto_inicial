@extends('admin.template.main')

@section('title','Crear Transporte')

@section('content')

	{!! Form::open(['route' => 'transportes.store', 'method' => 'POST']) !!}

		<div class="form-group">
			{!! Form::label('nombre_transporte','Nombre Transporte') !!}
			{!! Form::text('nombre_transporte', null, ['class' => 'form-control', 'placeholder' => 'Nombre Transporte', 'required']) !!}
		</div>
 
		<div class="form-group">
			{!! Form::label('direccion','Direccion') !!}
			{!! Form::text('direccion', null, ['class' => 'form-control', 'placeholder' => 'Direccion', 'required']) !!}
		</div>
 
		<div class="form-group">
			{!! Form::label('rif','Rif') !!}
			{!! Form::text('rif', null, ['class' => 'form-control', 'placeholder' => 'Rif', 'required']) !!}
		</div>
 
		<div class="form-group">
			{!! Form::label('telefono_movil','Telefono Movil') !!}
			{!! Form::text('telefono_movil', null, ['class' => 'form-control', 'placeholder' => 'Telefono Movil']) !!}
		</div>
 
 		<div class="form-group">
			{!! Form::label('telefono_oficina','Telefono Oficina') !!}
			{!! Form::text('telefono_oficina', null, ['class' => 'form-control', 'placeholder' => 'Telefono Oficina']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Registrar',  ['class' => 'btn btn-primary']) !!}
		</div>		

	{!! Form::close() !!}

@endsection