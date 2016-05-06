
<div class="jumbotron">
		  
		  



	<div class="row">
		<div class="col-md-6">

		<span class="label label-default">Nombre</span>
		  <h3>{{$hotel->name}}</h3>
		  <span class="label label-success">Direccion:</span>
		  <p>{{$hotel->address}}<br></p>
		   <span class="label label-success">Telefono:</span>
		  <p>{{$hotel->phone}}<br></p>
		   

		<p><a class="btn btn-primary btn-lg" href="{{route('hotel.detail',$hotel->id)}}" role="button">Ver Detalles</a></p>
		



		</div>
		
		<div class="col-md-4">
		  	<a href="/upload/{{$hotel->image}}" target="black"><img src="/upload/{{$hotel->image}}" height="380" width="200"></a>
		</div>
	</div>

	<ul class="nav nav-pills" role="tablist">

				  <li role="presentation" class="active">Votos <span class="badge">({{count($hotel->users)}})</span></a></li>
				 
				  <li role="presentation">Comentarios<span class="badge">({{count($hotel->comments)}})</span></a></li>

				   <li role="presentation"><a href="#">   <span class="label label-primary">Habitaciones	({{count($hotel->rooms)}})</span></li>
			

	</ul>
	</ul>
</div>

