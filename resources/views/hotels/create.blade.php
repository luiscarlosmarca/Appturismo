@extends('layout')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading"><h1>Creando un Nuevo hotel</h1> </div>
				<div class="panel-body">
					@include('error')
					@if (Session::has('message'))

					<p class="alert alert-info"> {{Session::get('message') }}</p>

					@endif
						{!!Form::open(['route'=>'hotels.create','method'=>'POST','enctype'=>'multipart/form-data'])!!}

									@include('hotels.partials.fields')
									{!! Form::label('file','Foto de portad del hotel')!!}
									{!! Form::file('image',null,['class'=>'form-control'])!!}
									<p class="help-block">Imagenes 2kb .jpg y .png. Tamaños Altura 380 px  X Ancho 200 px</p>

									<p>
										<button type="submit" class="btn btn-primary">
											Crear hotel
										</button>

									</p>
						{!! Form::close() !!}

				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('scripts')

	<script>
		$('.textarea-content').trumbowyg();

	</script>
@endsection