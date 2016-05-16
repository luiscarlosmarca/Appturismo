@extends('layout')
@section('title')
Editar Habitación
@stop
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Editar Habitación</b></div>
				
				@include('error')

					{!!Form::model($room,['route'=>['hotels.store_room',$room], 'method' => 'PATCH']) !!} 

								
								@include('hotels.rooms.partials.fields')

											
							
								
								<div class="col-sm-6">
									<button type="submit" class="btn btn-primary">Actualizar datos</button>
									 {!!Form::close() !!} 
									 <div class="col-sm-6">
									@include('hotels.partials.delete')

									</div>
								</div>


								
						
						  </div>
								
						
			
				</div>

</div>
@endsection