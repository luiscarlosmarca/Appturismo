<div class="form-group">
<input type="hidden" name="_token" value="{!! csrf_token() !!}">
					{!! Form::label('name','Nombre')!!}
					{!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Escriba el nombre del hotel'])!!}

					

					{!! Form::label('phone','Telefono')!!}
					{!! Form::text('phone',null,['class'=>'form-control','placeholder'=>'Escriba el telefono de contacto'])!!}


					{!! Form::label('address','Dirección')!!}
					{!! Form::text('address',null,['class'=>'form-control','placeholder'=>'Escriba  la dirección del hotel'])!!}

					{!! Form::label('email','Correo Electronico')!!}
					{!! Form::email('email',null,['class'=>'form-control','placeholder'=>'Escriba  el correo electronico del hotel'])!!}


					{!! Form::label('website','Sitio Web')!!}
					{!! Form::text('website',null,['class'=>'form-control','placeholder'=>'Escriba  el sitio web del hotel'])!!}

					{!! Form::label('file','Foto del hotel')!!}
					{!! Form::file('image',null,['class'=>'form-control'])!!}
					<p class="help-block">Imagenes 2kb .jpg y .png.</p>

					{!! Form::label('details','Detalles')!!}
					{!! Form::textarea('details',null,['class'=>'form-control','placeholder'=>'Escriba detalles del hotel'])!!}


				</div>