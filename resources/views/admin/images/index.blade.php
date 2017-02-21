@extends('admin.template.main')

@section('title','Listado de Imagenes')

@section('content')
	<div class="row">
		@foreach ($images as $image)
			<div class="col-md-4">
				<div class="panel panel-default">
				  <div class="panel-body">
						<img src="/images/articles/{{ $image->name }}" class="ima-responsive">
				  </div>
						<div class="panel-footer">{{ $image->name }}</div>
				  <div class="panel-footer">Panel footer</div>
				</div>			
			</div>
		@endforeach
	</div>
@endsection