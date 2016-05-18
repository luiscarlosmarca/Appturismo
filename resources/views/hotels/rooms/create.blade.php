@extends('layout')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-success">
			<div class="panel-heading"> 
				<h3 class="panel-title">Creando una Habitación del hotel: <b>{{$hotel->name}}</b></h3>
			</div>
				

					@if (Session::has('message'))

					<p class="alert alert-info"> {{Session::get('message') }}</p>

					@endif
					
					
					<div class="panel-body">
								
								{!!Form::open(['route'=>'hotels.store_room','method'=>'POST','enctype'=>'multipart/form-data'])!!}

											@include('hotels.rooms.partials.fields')
											



										<p>
												<button type="submit" class="btn btn-primary">
												Crear habitación
												</button>

										</p>
								
								{!! Form::close() !!}
								
							

					</div>
			</div>
		</div>
	</div>
</div>
@endsection
