@extends('admin.template.main')
@section('title','Lista de Categorias')
@section('content')
	<a href="{{ route("admin.categories.create") }}" class="btn btn-info" >"Registrar nueva Categoria"</a><hr>
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Acción</th>
		</thead>
		<tbody>
			@foreach ($categories as $Category)
				<tr>
					<td>{{ $Category->id    }}</td>
					<td>{{ $Category->name  }}</td>
					<td><a href="{{ route('admin.categories.edit',$Category->id)}}" class="btn btn-warning"><span 
					 class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>

					<a href="{{ route('admin.categories.destroy',$Category->id)}}" onclick="return confirm('¿Seguro que deseas eliminarlo?')" 
					class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a> ></td>
				</tr>
				
			@endforeach
		</tbody>


	</table>
	<div class="text-center">
		{!! $categories -> render() !!}
	</div>
	
@endsection