@extends('layout')
@section('title')
Editar Usuario
@stop
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Editar  <b>{{$users->name}}</b></div>
				
				@include('error')

					{!!Form::model($users,['route'=>['update.users',$users],'method' => 'PATCH','enctype'=>'multipart/form-data']) !!} 

								
								@include('users.partials.fields')

											
							
								
								<div class="col-sm-6">
									<button type="submit" class="btn btn-primary">Actualizar datos</button>
									 {!!Form::close() !!} 
									 <div class="col-sm-6">
								

									</div>
								</div>


								
						
						  </div>
								
						
			
				</div>

</div>
@endsection