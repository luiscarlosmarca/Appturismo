@extends('layout')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading"><h1>Creando un Nuevo hotel</h1> </div>
				<div class="panel-body">
				{!!Form::open(['route'=>'hotels.create','method'=>'POST'])!!}

				<div class="form-group">
					{!! Form::label('name','Nombre')!!}
					{!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Escriba el nombre del hotel'])!!}

					

					{!! Form::label('phone','Telefono')!!}
					{!! Form::text('phone',null,['class'=>'form-control','placeholder'=>'Escriba el telefono de contacto'])!!}


					{!! Form::label('address','Dirección')!!}
					{!! Form::text('address',null,['class'=>'form-control','placeholder'=>'Escriba  la dirección del hotel'])!!}

					{!! Form::label('email','Correo Electronico')!!}
					{!! Form::email('email',null,['class'=>'form-control','placeholder'=>'Escriba  el correo electronico del hotel'])!!}


					{!! Form::label('website','Sitio Web')!!}
					{!! Form::email('website',null,['class'=>'form-control','placeholder'=>'Escriba  el sitio web del hotel'])!!}

					{!! Form::label('image','Foto del hotel')!!}
					{!! Form::file('image',null,['class'=>'form-control'])!!}
					Suba una imagen JPG O PNG MAX 2MB<BR>


					{!! Form::label('details','Detalles')!!}
					{!! Form::textarea('details',null,['class'=>'form-control','placeholder'=>'Escriba detalles del hotel'])!!}


				</div>

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
