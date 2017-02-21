@extends('admin.template.main')


@section('title','Editar a ' . $transporte->nombre_transporte)

@section('content')

		{!! Form::open(['route' => ['transportes.update',$transporte], 'method'=> 'PUT']) !!}

		<div class="form-group">
			{!! Form::label('nombre_transporte','Nombre Transporte') !!}
			{!! Form::text('nombre_transporte', $transporte->nombre_transporte, ['class' => 'form-control', 'placeholder' => 'Nombre Transporte', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('direccion','Direccion') !!}
			{!! Form::text('direccion', $transporte->direccion, ['class' => 'form-control', 'placeholder' => 'Direccion', 'required']) !!}
		</div>
 
		<div class="form-group">
			{!! Form::label('rif','Rif') !!}
			{!! Form::text('rif', $transporte->rif, ['class' => 'form-control', 'placeholder' => 'Rif', 'required']) !!}
		</div>
 
		<div class="form-group">
			{!! Form::label('telefono_movil','Telefono Movil') !!}
			{!! Form::text('telefono_movil', $transporte->telefono_movil, ['class' => 'form-control', 'placeholder' => 'Telefono Movil']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('telefono_oficina','Telefono Oficina') !!}
			{!! Form::text('telefono_oficina', $transporte->telefono_oficina, ['class' => 'form-control', 'placeholder' => 'Telefono Oficina']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Guardar',  ['class' => 'btn btn-primary']) !!}
		</div>		

	{!! Form::close() !!}

@endsection  
