@extends('layout')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading"><h1>Creando una Habitación del Hotel ________</h1> </div>
				<div class="panel-body">
				{!!Form::open(['route'=>'hotels.store_room','method'=>'POST'])!!}

				<div class="form-group">
					{!! Form::label('name','Numero de Camas')!!}
					{!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Escriba el tipo de habitación'])!!}
					<br>
					{!! Form::label('name','Tipo de Habitacion')!!}
					{!!Form::select('animal',['Cats' => 'Spaniel','Cats' => 'Spaniel','Cats' => 'Spaniel','Cats' => 'Spaniel'])
    				!!}

    				<br>
					{!! Form::label('image','Foto de la habitacion')!!}
					{!! Form::file('image',null,['class'=>'form-control'])!!}
					Suba una imagen JPG O PNG MAX 2MB<BR>




				</div>

				<p>
					<button type="submit" class="btn btn-primary">
						Crear habitación
					</button>

				</p>
				{!! Form::close() !!}

					</div>
			</div>
		</div>
	</div>
</div>
@endsection
