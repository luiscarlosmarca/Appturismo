@extends('layout')
@section('title')
Editar Hotel
@stop
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Editar  <b>{{$hotel->name}}</b></div>
				
				@include('error')

					{!!Form::model($hotel,['route'=>['hotels.update',$hotel], 'method' => 'PATCH']) !!} 

								
								@include('hotels.partials.fields')

											
							
								
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