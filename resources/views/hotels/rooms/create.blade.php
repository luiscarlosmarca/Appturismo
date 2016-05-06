@extends('layout')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading"><h1>Creando una Habitación del <b>{{$hotel->name}}</b></h1> </div>

					@if (Session::has('message'))

					<p class="alert alert-info"> {{Session::get('message') }}</p>

					@endif
					
					
				<div class="panel-body">
							{!!Form::open(['route'=>'hotels.store_room','method'=>'POST','enctype'=>'multipart/form-data'])!!}

									<div class="form-group">
										{!! Form::label('Cantidad','Cantidad de habitaciones')!!}
										{!! Form::selectRange('cantidad',1,4)!!}
										{!! Form::label('numBed','Numero de Camas ')!!}
										{!! Form::selectRange('numBed',1,4)!!}
										{!! Form::label('numPerson','Capacidad para # de personas')!!}
										{!! Form::selectRange('numPerson',1,4)!!}
										
										{!! Form::label('type','Tipo de Habitacion')!!}
										{!! Form::select('type', array('sencilla' => 'Sencilla', 'doble' => 'Doble'))!!}
										
										{!! Form::label('price','Precio')!!}
										{!! Form::text('price')!!}
										

										{!! Form::label('extra','Escoja los adicionales que tiene la habitación')!!}
											
										{!! Form::select('extra', array('TV' => 'Tv', 'TV + Wife' => 'Tv + Wife','Tv + Wife + Psicina'=>'Tv + Wife + Pscina'))!!}
					    				
					    				<br>
										{!! Form::label('image','Foto de la habitacion')!!}
										{!! Form::file('image',null,['class'=>'form-control'])!!}
										Suba una imagen JPG O PNG MAX 2MB<BR>

										{!! Form::hidden('hotel_id',$hotel->id)!!}



									</div>

									<p>
											<button type="submit" class="btn btn-primary">
											Crear habitación
											</button>

									</p>
							
							{!! Form::close() !!}
						<a href="{{ URL::previous() }}"  class="btn btn-primary">Ver el {{$hotel->name}} </a>
					

					</div>
			</div>
		</div>
	</div>
</div>
@endsection
