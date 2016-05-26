@extends('layout')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading"><h1>Enviar Mensaje al  <b>{{$hotel->name}}</b></h1> </div>
				<div class="panel-body">

					@include('error')
					@if (Session::has('message'))

					<p class="alert alert-info"> {{Session::get('message') }}</p>
					

					@endif
					

						{!!Form::open(['route'=>'hotels.store_message','method'=>'POST'])!!}

								<div class="form-group">
									{!! Form::label('name','Nombre*')!!}
									{!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Escriba su nombre'])!!}
									
									{!! Form::label('phone','Telefono')!!}
									{!! Form::text('phone',null,['class'=>'form-control','placeholder'=>'Escriba el telefono de contacto '])!!}


									{!! Form::label('email','Correo Electronico*')!!}
									{!! Form::email('email',null,['class'=>'form-control','placeholder'=>'Escriba su correo electronico'])!!}

									{!! Form::label('matter','Asunto')!!}
									{!! Form::select('matter', array('Reservar' => 'Reservar', 'Sugerencia' => 'Sugerencia','Queja' => 'Queja','Otros' =>'Otro'))!!}
										<br>
									{!! Form::label('message','Mensaje')!!}
									{!! Form::textarea('message',null,['class'=>'form-control textarea-content','placeholder'=>'Escriba el mensaje para el hotel'])!!}


									{!! Form::hidden('hotel_id',$hotel->id)!!}


								</div>

								<p>
									<button type="submit" class="btn btn-primary">
										Enviar Mensaje
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