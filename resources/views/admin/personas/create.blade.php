@extends('admin.template.main')

@section('title','Crear Usuario')

@section('content')


	{!! Form::open(['route' => 'personas.store', 'method' => 'POST']) !!}

		<div class="form-group">
			{!! Form::label('tipo_transportista','Tipo de Personal') !!}
			{!! Form::select('tipo_transportista', ['ADMINISTRATIVO'=> 'Administrativo','AFILIADO'=> 'Afiliado','CHOFER'=>'Chofer'],null,['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('identificacion','Cedula') !!}
			{!! Form::text('identificacion', null, ['class' => 'form-control', 'placeholder' => 'Cedula de la persona', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('primer_nombre','Primer Nombre') !!}
			{!! Form::text('primer_nombre', null, ['class' => 'form-control', 'placeholder' => 'Primer Nombre', 'required']) !!}
		</div>
 
		<div class="form-group">
			{!! Form::label('segundo_nombre','Segundo Nombre') !!}
			{!! Form::text('segundo_nombre', null, ['class' => 'form-control', 'placeholder' => 'Segundo Nombre']) !!}
		</div>
 
		<div class="form-group">
			{!! Form::label('primer_apellido','Primer Apellido') !!}
			{!! Form::text('primer_apellido', null, ['class' => 'form-control', 'placeholder' => 'Primer Apellido', 'required']) !!}
		</div>
 
		<div class="form-group">
			{!! Form::label('segundo_apellido','Segundo Apellido') !!}
			{!! Form::text('segundo_apellido', null, ['class' => 'form-control', 'placeholder' => 'Segundo Apellido']) !!}
		</div>
 
		<div class="form-group">
			{!! Form::label('lugar_nacimiento','Lugar de nacimiento') !!}
			{!! Form::text('lugar_nacimiento', null, ['class' => 'form-control', 'placeholder' => 'Lugar de nacimiento', 'required']) !!}
		</div>
 
		<div class="form-group">
			{!! Form::label('fecha_nacimiento','Fecha de nacimiento') !!}
			{!! Form::date('fecha_nacimiento', null, ['class' => 'form-control', 'placeholder' => 'Fecha de nacimiento', 'required']) !!}
		</div>
 
		<div class="form-group">
			{!! Form::label('direccion','Direccion') !!}
			{!! Form::text('direccion', null, ['class' => 'form-control', 'placeholder' => 'Direccion', 'required']) !!}
		</div>
 
		<div class="form-group">
			{!! Form::label('sexo','Sexo') !!}
			{!! Form::select('sexo', [' '=> 'Seleccione un tipo...','F'=>'Femenino','M'=>'Masculino'],null,['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('transporte_id','Transporte') !!}
{!! Form::select('transporte_id',$transportes, null, ['class' => 'form-control', 'placeholder' => 'Seleccione una opcion.', 'required']) !!}
		</div>

 
		<div class="form-group">
			{{Form::button('Guardar', array('class'=>'btn btn-primary', 'type'=>'submit', 'target'=>'_blank'))}}
		</div>		

	{!! Form::close() !!}

@endsection