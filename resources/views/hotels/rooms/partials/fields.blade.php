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