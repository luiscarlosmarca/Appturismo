@extends('layout')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading"><h1>Hotel: {{$hotel->name}}</h1> </div>
				<div class="panel-body">
				<div class="jumbotron">
		  
		   
					<div class="row">
						
						<div class="col-md-8">
							<span class="label label-default">Detalles</span>
							  <h3>{{$hotel->details}}</h3>
							  <span class="label label-success">Direccion:</span>
							  <p>{{$hotel->address}}<br></p>
							   <span class="label label-success">Telefono:</span>
							  <p>{{$hotel->phone}}<br></p>
							   <span class="label label-success">Email:</span>
							  <p>{{$hotel->email}}<br></p>
							   <span class="label label-success">Sitio web:</span>
							  <p>{{$hotel->website}}<br></p>
						</div>
							
							<div class="col-md-4">
							  	<a href="/upload/{{$hotel->image}}.jgp" target="black"><img src="/upload/{{$hotel->image}}.jpg" height="380" width="200"></a>
							</div>
						</div>

				</div>
				<div class="panel panel-primary">

					 <div class="panel-heading">

					 	<h3 class="panel-title">Habitaciones: ({{count($hotel->rooms)}})</h3> 

					 </div> 

					 <div class="panel-body"> 
					 		@foreach($hotel->rooms as $room)
		
							<div>
							
								<p> Tipo:<strong> {{$room->type}}</strong></p>
								<p> Capacidad para:<strong> {{$room->numPerson}}</strong> personas</p>
								<p> Numero de camas:<strong> {{$room->numBed}}</strong></p>
								<p> Extras:<strong> {{$room->extra}}</strong></p>
								<p> Precio: {{$room->price}}</p>
								

								<img src="/upload/room/{{$room->image}}.jpg" align="center">
								<hr>
							</div>
							@endforeach

					 </div> 
				 </div>
				
<br> <br>
				<textarea class="form-control" rows="3"></textarea>
				<br>
				<button type="button" class="btn btn-primary">Enviar comentario</button>
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
				<p>Comentario:<br> {{$comment->comment}}</p>
				<hr>
			</div>
			@endforeach

		</div>
	</div>
</div>
@endsection
