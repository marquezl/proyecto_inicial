@extends('admin.template.main')

@section('title','Listado de Transportes')

@section('content')
	<a href="{{ route("transportes.create") }}" class="btn btn-info" >"Registrar nuevo Transporte"</a><hr>
		<!-- BUSCADOR DE TRANSPORTES -->
			{!! Form::open(['route' => 'transportes.index', 'method' => 'GET', 'class' => 'navbar-form pull-right' ]) !!}
				<div class="input-group">
{!! Form::text('identificacion', null, ['class' => 'form-control', 'placeholder' => 'Buscar transporte..','area-describedby' => 'search']) !!}
<span class="input-group-addon" id="search" ><span class="glyphicon glyphicon-search" id="search" aria-hidden="true"></span></span>
				</div>			
			{!! Form::close()!!}
		<!-- FIN DEL BUSCADOR DE TRANSPORTES -->

	<hr>	
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Nombre Transporte</th>
            <th>Direccion</th>
            <th>Rif</th>
            <th>Telefono Movil</th>
            <th>Telefono Oficina</th>
			<th>Acción</th>
		</thead>
		<tbody>
			@foreach ($transportes as $transporte)
				<tr>
					<td>{{ $transporte->id    }}</td>
					<td>{{ $transporte->nombre_transporte }}</td>
			        <td>{{ $transporte->direccion  }}</td>
			        <td>{{ $transporte->rif  }}</td>
			        <td>{{ $transporte->telefono_movil  }}</td>
			        <td>{{ $transporte->telefono_oficina  }}</td>
					<td>


 	<a href="{{ route('transportes.edit',$transporte->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" 
	aria-hidden="true"></span></a>

	<a href="{{ route('admin.transportes.destroy',$transporte->id)}}" onclick="return confirm('¿Seguro que deseas eliminarlo?')" 
	class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a> 
					
 					</td>
				</tr>
				
			@endforeach
		</tbody>

	</table>
	<div>
		{!! $transportes -> render() !!}
	</div>
	
@endsection