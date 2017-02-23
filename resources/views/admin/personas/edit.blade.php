@extends('admin.template.main')


@section('title','Editar a ' . $persona->primer_nombre .' '. $persona->primer_apellido)

@section('content')

		{!! Form::open(['route' => ['personas.update',$persona], 'method'=> 'PUT']) !!}

		<div class="form-group">
			{!! Form::label('tipo_transportista','Tipo de Personal') !!}
			{!! Form::select('tipo_transportista', ['ADMINISTRATIVO'=> 'Administrativo','AFILIADO'=> 'Afiliado','CHOFER'=>'Chofer'],$persona->tipo_transportista,['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('identificacion','Cedula') !!}
			{!! Form::text('identificacion', $persona->identificacion, ['class' => 'form-control', 'placeholder' => 'Cedula de la Persona', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('primer_nombre','Primer Nombre') !!}
			{!! Form::text('primer_nombre', $persona->primer_nombre, ['class' => 'form-control', 'placeholder' => 'Primer Nombre', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('segundo_nombre','Segundo Nombre') !!}
			{!! Form::text('segundo_nombre', $persona->segundo_nombre, ['class' => 'form-control', 'placeholder' => 'Segundo Nombre']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('primer_apellido','Primer Apellido') !!}
			{!! Form::text('primer_apellido', $persona->primer_apellido, ['class' => 'form-control', 'placeholder' => 'Primer Apellido', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('segundo_apellido','Segundo Apellido') !!}
			{!! Form::text('segundo_apellido', $persona->segundo_apellido, ['class' => 'form-control', 'placeholder' => 'Segundo Apellido']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('lugar_nacimiento','Lugar Nacimiento') !!}
			{!! Form::text('lugar_nacimiento', $persona->lugar_nacimiento, ['class' => 'form-control', 'placeholder' => 'Lugar de Nacimiento', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('fecha_nacimiento','Fecha Nacimiento') !!}
			{!! Form::date('fecha_nacimiento', $persona->fecha_nacimiento, ['class' => 'form-control', 'placeholder' => 'Fecha de Nacimiento', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('direccion','Direccion') !!}
			{!! Form::text('direccion', $persona->direccion, ['class' => 'form-control', 'placeholder' => 'Direccion', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('sexo','Sexo') !!}
			{!! Form::select('sexo',  ['F' => 'Femenino','M' => 'Masculino'], $persona->sexo, ['Sexo' => 'form-control']) !!}
		</div>		

		<div class="form-group">
			{!! Form::label('transporte_id','Transporte') !!}
{!! Form::select('transporte_id',$transportes, $persona->direccion, ['class' => 'form-control', 'placeholder' => 'Seleccione una opcion.', 'required']) !!}
		</div>		

		<div class="form-group">
			{!! Form::submit('Guardar',  ['class' => 'btn btn-primary']) !!}
		</div>		

	{!! Form::close() !!}

@endsection  
