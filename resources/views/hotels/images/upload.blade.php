@extends('layout')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading"><h1>Subir Imagenes para el hotel: {{$hotel->name}}</h1> </div>
				<div class="panel-body">
					@include('error')
					@if (Session::has('message'))

					<p class="alert alert-info"> {{Session::get('message') }}</p>

					@endif
						{!!Form::open(['route'=>'hotels.store_images','method'=>'POST','enctype'=>'multipart/form-data'])!!}

							{!! Form::label('title','Titulo de la imagen')!!}
							{!! Form::text('title',null,['class'=>'form-control','placeholder'=>'Describa el espacio de la imagen'])!!}


							{!! Form::label('name','Foto del hotel')!!}
							{!! Form::file('name',null,['class'=>'form-control'])!!}
							<p class="help-block">Imagenes 2kb .jpg y .png. Tamaños Altura 380 px  X Ancho 200 px</p>

							{!! Form::hidden('hotel_id',$hotel->id)!!}


									

								<p>
									<button type="submit" class="btn btn-primary">
										Subir imagen
									</button>


									<a href="{{route('hotel.detail',$hotel->id)}}"class="btn btn-primary">
										Volver al Hotel
						
									</a>

								</p>
						{!! Form::close() !!}

				</div>
			</div>
		</div>
	</div>
</div>
@endsection
