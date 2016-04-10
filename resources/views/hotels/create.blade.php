@extends('layout')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading"><h1>Creando un Nuevo hotel</h1> </div>
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
							  	<a href="/upload/{{$hotel->image}}.jgp" target="black"><img src="/upload/{{$hotel->image}}.jpg" height="580" width="400"></a>
							</div>
						</div>

				</div>
<!-- 				//Html static que sera reemplazado con las habitaciones, y comentarios del hotel
 -->

				
				</div>
				
<br> <br>
				<textarea class="form-control" rows="3"></textarea>
				<br>
				<button type="button" class="btn btn-primary">Enviar comentario</button>
			</div>
		</div>
	</div>
</div>
@endsection
