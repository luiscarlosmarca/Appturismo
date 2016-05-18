@extends('layout')
@section('title')
Editar Habitación
@stop
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-success">
			<div class="panel-heading"> 
				<h3 class="panel-title">Editando Habitación {{$room->type}}</b></h3>
			</div>
				
				@include('error')

				<div class="panel-body">
					{!!Form::model($room,['route'=>['hotels.updateroom',$room], 'method' => 'PATCH']) !!} 
							
							
											
								
						<div class="row">

								  <div class="col-md-6">

								  		<div class="form-group">
											{!! Form::label('Cantidad','Cantidad de habitaciones')!!}
											{!! Form::text('cantidad',1)!!}
										</div>

										<div class="form-group">
								  			{!! Form::label('numPerson','Capacidad para # de personas')!!}
											{!! Form::selectRange('numPerson',1,4)!!}
								  		</div>

								  		<div class="form-group">
								  			{!! Form::label('type','Tipo de Habitacion')!!}
											{!! Form::select('type', array('sencilla' => 'Sencilla', 'doble' => 'Doble','Triple' => 'Triple','Suite' => 'Suite'))!!}
								  		</div>

								  		 <div class="form-group">
											{!! Form::label('numBed','Numero de Camas ')!!}
											{!! Form::selectRange('numBed',1,4)!!}
								 		 </div>



								</div>

								  <div class="col-md-6">



								  <div class="form-group">
								  			{!! Form::label('price','Precio')!!}
											{!! Form::text('price')!!}
								  </div>

								  <div class="form-group">
								  			{!! Form::label('extra','Escoja los adicionales que tiene la habitación')!!}
																			
											{!! Form::select('extra', array('TV' => 'Tv', 'TV + Wife' => 'Tv + Wife','Tv + Wife + Psicina'=>'Tv + Wife + Pscina','Aire acondicionado + Tv + Wife + Psicina'=>'Aire acondicionado + Tv + Wife + Pscina'),null,['class'=>'select-extra', 'single','required'])!!}
								  </div>


								 {{-- <div class="form-group">
								  			{!! Form::label('image','Foto de la habitacion')!!}
											{!! Form::file('image',null,['class'=>'form-control'])!!}
																		Suba una imagen JPG O PNG MAX 2MB<BR>
								  </div>--}}

								 

								</div>


						</div>

						<div class="col-sm-6">
								<button type="submit" class="btn btn-primary"> <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Actualizar datos</button>
									 {!!Form::close() !!} 
						</div>
						 <div class="col-sm-6">

									 @include('hotels.rooms.partials.delete')
																		
						</div>
								


								
						
			</div>
								
						
			
	</div>

</div>
@endsection