
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


		  <div class="form-group">
		  			{!! Form::label('image','Foto de la habitacion')!!}
					{!! Form::file('image',null,['class'=>'form-control'])!!}
												Suba una imagen JPG O PNG MAX 2MB<BR>
		  </div>

		 

		</div>


</div>

						
										
										
									
										
									
										

									
					    				
					    				
										

										{!! Form::hidden('hotel_id',$hotel->id)!!}


@section('scripts')
<script>
	s(".select-extra").chosen({

	});


</script>
@endsection