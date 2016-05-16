<div class="form-group">
<input type="hidden" name="_token" value="{!! csrf_token() !!}">
					{!! Form::label('name','Nombre')!!}
					{!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Escriba el nombre del hotel'])!!}

						
					{!! Form::label('address','Tipo de Usuario')!!}<br>
					{!! Form::select('role',['user'=>'Usuario','hotelero'=>'Hotelero'],['class'=>'form-control','placeholder'=>'Escriba  la dirección del hotel'])!!}<br>

					{!! Form::label('email','Correo Electronico')!!}
					{!! Form::email('email',null,['class'=>'form-control','placeholder'=>'Escriba  el correo electronico del hotel'])!!}

					{!!Form::label('password','Contraseña')!!} 

						//{{--comprabacion de contraseña por si es null, estan en el model user--}}

					{!!Form::password('password',['class'=>'form-control','placeholder'=>'Escriba su nueva contraseña'])!!}

					{!!Form::label('password','Confirmar contraseña')!!}
					{!!Form::password('password_confirmation',['class'=>'form-control','placeholder'=>'Confirme su nueva contraseña'])!!}
			

				


				</div>