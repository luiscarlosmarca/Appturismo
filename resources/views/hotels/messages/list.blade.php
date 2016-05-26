@extends('layout')

@section('content')
<div class="container-fluid">
	<div class="row">


		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Mensajes del {{$hotels->name }}</div>
				<div class="panel-body">
					
				@foreach($hotels->messages as $message)
				
				<div class="panel panel-primary">
					<div class="jumbotron">
							  
							  
						<div class="row">
							<div class="col-md-6">

							<span class="label label-default">Nombre</span>
							  <h3>{{$message->name}}</h3>
							  <span class="label label-success">Email:</span>
							  <p>{{$message->email}}<br></p>
							   <span class="label label-success">Telefono:</span>
							  <p>{{$message->phone}}<br></p>
							    <span class="label label-success">Asunto:</span>
							  <p>{{$message->matter}}<br></p>
							   <span class="label label-success">Mensaje:</span>
							  <p>{!!$message->message!!}<br></p>

							</div>

						
					</div>
					</div>
					</div>


				@endforeach
				
			</div>
		</div>
	</div>
</div>
@endsection
