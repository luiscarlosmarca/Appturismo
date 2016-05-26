@extends('layout')

@section('content')
<div class="container-fluid">
	<div class="row">


		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-success">
					@if (Session::has('message'))

							<p class="alert alert-info"> {{Session::get('message') }}</p>

					@endif
				<div class="panel-heading"><h1>Mis hoteles</h1> </div>
				<div class="panel-body">
								
					

				<div class="jumbotron">
		  
		   
					<div class="row">
						
						@foreach($user->hotels as $hotel)

							<a href="{{route('hotels.createroom',$hotel->id)}}"class="btn btn-primary">
								Crear una Habitación
								
							</a>
			
							<a href="{{route('hotels.edit',$hotel->id)}}"class="btn btn-primary">
								Editar Hotel
							</a>

						
							<a href="{{route('hotels.upload_images',$hotel->id)}}"class="btn btn-success">
								Subir galeria de imagenes
							</a>
							<p>
						
							   <p><h2>{{$hotel->name}}</h2><br></p>
							  <h3>{!!$hotel->details!!}</h3>
							  <span class="label label-success">Dirección:</span>
							  <p>{{$hotel->address}}<br></p>
							   <span class="label label-success">Telefono:</span>
							  <p>{{$hotel->phone}}<br></p>
							   <span class="label label-success">Email:</span>
							  <p>{{$hotel->email}}<br></p>
							   <span class="label label-success">Sitio web:</span>
							  <p>{{$hotel->website}}<br></p>
					</div>
				</div>
							<div class="row">
								@foreach($hotel->images as $image)
							
									<div class="col-md-6">
										
											<div class="panel panel-default">
											  <div class="panel-heading">
											    <h3 class="panel-title">   <center>{{$image->title}}   </center></h3>
											  </div>
											  <div class="panel-body">
											   <center> <img src="/upload/hotels/images/{{$image->name}}" class="img-responsive"></center>
											  </div>
											</div>
									</div>
							
								@endforeach
								</div>

								<div class="panel panel-primary">

										 <div class="panel-heading">

										 	<h3 class="panel-title">Habitaciones  ({{count($hotel->rooms)}})</h3> 

										 </div> 

											<div class="row">
												 @foreach($hotel->rooms as $room)
													
													<div class="col-md-8">
													 <div class="panel-body"> 
														<div>
															<p> Cantidad de habitaciones:<strong> {{$room->cantidad}}</strong></p>
															<p> Tipo:<strong> {{$room->type}}</strong></p>
															<p> Capacidad para:<strong> {{$room->numPerson}}</strong> personas</p>
															<p> Numero de camas:<strong> {{$room->numBed}}</strong></p>
															<p> Extras:<strong> {{$room->extra}}</strong></p>
															<p> Precio: ${{$room->price}}</p>
															

															<img src="/upload/room/{{$room->image}}" align="center" class="img-responsive"	>
															<hr>

															<a href="{{route('hotels.editroom',$room->id)}}"class="btn btn-primary">
															Editar Habitación
															</a>

														</div>
														</div>
												</div>
												
												
												
											@endforeach
										</div>
								</div>


								<p>
								<div class="panel panel-primary">

									<div class="panel-heading">

										<h3 class="panel-title">Comentarios ({{count($hotel->comments)}})</h3> 

									</div> 
										<div class="row">
										<div class="col-md-6">
											<div class="panel-body"> 
												@foreach($hotel->comments as $comment)
						
														<div>
															<p> <strong>Fecha del comentario:</strong> {{$comment->created_at->format('d/m/Y')}}</p>
															<p> Usuario:<strong> {{$comment->user->name}}</strong></p>
															<p>Comentario:<br> {{$comment->comment}}</p>
															<hr>
														</div>
											</div>
												

												@endforeach
										</div>
									</div>
								</div>	
									<p>
									<div class="panel panel-primary">

												 <div class="panel-heading">

												 	<h3 class="panel-title">Mensajes ({{count($hotel->messages)}})</h3> 

												 </div> 
												 <div class="col-md-6">
												 <div class="panel-body"> 
												@foreach($hotel->messages as $message)
						
														<div>
															<p> <strong>Nombre:</strong> {{$message->name}}</p>
															<p> email:<strong> {{$message->email}}</strong></p>
															<p>Telefono:<br> {{$message->phone}}</p>
															<p>Asunto:<br> {{$message->matter}}</p>
															<p>Mensaje:<br> {{$message->message}}</p>
															<hr>
														</div>
												</div>
												</div>	
														</div>	</div>
									</div>
												
												@endforeach
									
								</div>		
									</div>	

								<p align="right">
								Votos <span class="badge">({{count($hotel->users)}})</span>
								</p>		
					
					@endforeach
</div>	</div>	</div>	</div>	
														
							

		
@endsection






