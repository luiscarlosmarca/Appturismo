@extends('layout')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading"><h1>Creando una Habitación del <b>{{$hotel->name}}</b></h1> </div>

					@if (Session::has('message'))

					<p class="alert alert-info"> {{Session::get('message') }}</p>

					@endif
					
					
				<div class="panel-body">
							{!!Form::open(['route'=>'hotels.store_room','method'=>'POST','enctype'=>'multipart/form-data'])!!}

										@include('hotels.rooms.partials.fields')
										{!! Form::hidden('hotel_id',$hotel->id)!!}



									<p>
											<button type="submit" class="btn btn-primary">
											Crear habitación
											</button>

									</p>
							
							{!! Form::close() !!}
						<a href="{{ URL::previous() }}"  class="btn btn-primary">Ver el {{$hotel->name}} </a>
					

					</div>
			</div>
		</div>
	</div>
</div>
@endsection
