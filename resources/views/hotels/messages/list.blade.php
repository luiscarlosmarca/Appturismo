@extends('layout')

@section('content')
<div class="container-fluid">
	<div class="row">


		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Mensaje del _____ </div>
				<div class="panel-body">
					
				@foreach($messages as $message)
				

					<div class="jumbotron">
							  
							  
						<div class="row">
							<div class="col-md-6">

							<span class="label label-default">Nombre</span>
							  <h3>{{$message->name}}</h3>
							  <span class="label label-success">Telefono:</span>
							  <p>{{$message->phone}}<br></p>
							   <span class="label label-success">Telefono:</span>
							  <p>{{$message->phone}}<br></p>
							   

							</div>

						
					</div>




				@endforeach
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
