@extends('admin.template.main')

@section('title','Listado de Personas')

@section('content')
	<a href="{{ route("personas.create") }}" class="btn btn-info" >"Registrar nueva Persona"</a><hr>
		<!-- BUSCADOR DE PERSONAS -->
			{!! Form::open(['route' => 'personas.index', 'method' => 'GET', 'class' => 'navbar-form pull-right' ]) !!}
				<div class="input-group">
{!! Form::text('primer_nombre', null, ['class' => 'form-control', 'placeholder' => 'Buscar persona..','area-describedby' => 'search']) !!}
					<span class="input-group-addon" id='search'><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
				</div>

			{!! Form::close()!!}


		<!-- FIN DEL BUSCADOR DE PERSONAS -->
	
	<hr>	
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Cedula</th>
			<th>Tipo de Personal</th>
			<th>Primer Nombre</th>
			<th>Segundo Nombre</th>
			<th>Primer Apellido</th>
			<th>Segundo Apellido</th>
            <th>Lugar_nacimiento</th>
            <th>Fecha_nacimiento</th>
            <th>Direccion</th>
            <th>Sexo</th>
            <th>Transporte</th>
			<th>Acción</th>
		</thead>
		<tbody>
			@foreach ($personas as $persona)
				<tr>
					<td>{{ $persona->id    }}</td>
					<td>{{ $persona->identificacion  }}</td>
 					<td>
	 					@if ($persona->tipo_transportista == "ADMINISTRATIVO")
							<span class="btn btn-default" role="group">{{ 'Administrativo' }} </span>
					    @elseif ($persona->tipo_transportista == "AFILIADO")
							<span class="btn btn-default" role="group">{{ 'Afiliado' }}</span>
						@else
							<span class="btn btn-default" role="group">{{ 'Chofer' }}</span>
						@endif 
					</td>
					<td>{{ $persona->primer_nombre  }}</td>
					<td>{{ $persona->segundo_nombre  }}</td>
					<td>{{ $persona->primer_apellido  }}</td>
					<td>{{ $persona->segundo_apellido  }}</td>
			        <td>{{ $persona->lugar_nacimiento  }}</td>
			        <td>{{ $persona->fecha_nacimiento  }}</td>
			        <td>{{ $persona->direccion  }}</td>
 					<td>
	 					@if ($persona->sexo == "F")
							<span class="label label-danger">{{ 'Femenino' }} </span>
						@else
							<span class="label label-primary">{{ 'Masculino' }}</span>
						@endif 
					</td>
			        <td>{{ $persona->transporte->nombre_transporte }}</td>
					<td><a href="{{ route('personas.edit',$persona->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" 
						aria-hidden="true"></span></a>
				    </td>
					<td>
						<a href="{{ route('admin.personas.destroy',$persona->id) }}" onclick="return confirm('¿Seguro que deseas eliminarlo?')" 
						class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a> 
				    </td>
				</tr>
				
			@endforeach
		</tbody>


	</table>
	<div>
		{!! $personas -> render() !!}
	</div>
	
@endsection