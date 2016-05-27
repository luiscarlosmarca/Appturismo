@extends('layout')

@section('css')
<link rel="stylesheet" type="text/css" media="all" href="/style/css/animate.css">
@endsection
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading"><h1>Hotel: {{$hotel->name}}</h1> </div>
				<div class="panel-body">
					@if (Session::has('message'))

					<p class="alert alert-info"> {{Session::get('message') }}</p>

					@endif
				@if (Auth::guest())
					
					<a href="{{route('hotels.create_message',$hotel->id)}}"class="btn btn-success">
						Enviar un mensaje
					</a>
					@elseif (Auth::user()->admin())
						<a href="{{route('hotels.createroom',$hotel->id)}}"class="btn btn-primary">
							Crear una Habitación
						</a>
		
						<a href="{{route('hotels.edit',$hotel->id)}}"class="btn btn-primary">
							Editar Hotel
						</a>
						<a href="{{route('hotels.upload_images',$hotel->id)}}"class="btn btn-success">
						Subir galeria de imagenes
						</a>

						<a href="{{route('hotels.ver_message',$hotel->id)}}"class="btn btn-primary">
						Ver mensajes
						</a> 
				@endif
				
						
				
					

					
				</div>

				
					
				<div class="jumbotron">
		  
		   
					<div class="row">
						
						
							<span class="label label-default">Detalles</span>
							  <h3>{!!$hotel->details!!}</h3>
							  <span class="label label-success">Dirección:</span>
							  <p>{{$hotel->address}}<br></p>
							   <span class="label label-success">Telefono:</span>
							  <p>{{$hotel->phone}}<br></p>
							   <span class="label label-success">Email:</span>
							  <p>{{$hotel->email}}<br></p>
							   <span class="label label-success">Sitio web:</span>
							  <p><a href="http://{{$hotel->website}}" target="black">{{$hotel->website}} </a><br></p>
					
														
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

					 	<h3 class="panel-title">Habitaciones</h3> 

					 </div> 

					<div class="row">
						 @foreach($hotel->rooms as $room)
									
									<div class="col-md-6">
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
								@if (Auth::guest())
								@elseif (Auth::user()->admin())
								<a href="{{route('hotels.editroom',$room->id)}}"class="btn btn-primary">
								Editar Habitación
								</a>
								@endif
							


							</div>
							 </div> 
							  </div> 
						@endforeach

					 </div> 

				 </div>
				 @if (Auth::user())	
					 @if(! auth()->user()->hasVote($hotel))

					{!! Form::open(['route'=>['votes.store',$hotel->id],'method'=>'POST'])!!}
										<button type="submit" class="btn btn-primary">
											<span class="glyphicon glyphicon-thumbs-up"></span> Votar
										</button>
					{!!Form::close()!!}
					@else
					{!! Form::open(['route'=>['votes.destroy',$hotel->id],'method'=>'DELETE'])!!}
										<button type="submit" class="btn btn-danger">
											<span class="glyphicon glyphicon-thumbs-down"></span> Quitar Voto
										</button>
					{!!Form::close()!!}
					@endif
				@endif
				<br> <br>
				@if (Auth::user())	
					{!!Form::open(['route'=>'hotels.store_comment','method'=>'POST'])!!}
					
					{!! Form::label('comment','Comentario')!!}
					{!! Form::textarea('comment',null,['class'=>'form-control textarea-content','placeholder'=>'Escriba su opinion sobre este Hotel'])!!}

					{!! Form::hidden('hotel_id',$hotel->id)!!}

					<br>
					<button type="submit" class="btn btn-primary">Enviar comentario</button>
					{!! Form::close() !!}
				@endif
			</div>


				<ul class="nav nav-pills" role="tablist">

				  <li role="presentation" class="active"><a href="#">Votos <span class="badge">({{count($hotel->users)}})</span></a></li>
				 
				  <li role="presentation"><a href="#"> Comentarios<span class="badge">({{count($hotel->comments)}})</span></a></li>

				</ul>
			
			<p>

				@foreach($hotel->users as $user)

				<span class="label label-default">{{$user->name}}</span>

				@endforeach
			</p>

			@foreach($hotel->comments as $comment)
		
			<div>
				<p> <strong>Fecha del comentario:</strong> {{$comment->created_at->format('d/m/Y')}}</p>
				<p> Usuario:<strong> {{$comment->user->name}}</strong></p>
				<p>Comentario:<br> {!!$comment->comment!!}</p>
				<hr>
			</div>
			@endforeach

		</div>
	</div>
</div>
@endsection

@section('scripts')

	<script>
		$('.textarea-content').trumbowyg();

	</script>
@endsection
