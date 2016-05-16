@extends('layout')

@section('content')
<div class="container-fluid">
	<div class="row">


		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
					@if (Session::has('message'))

							<p class="alert alert-info"> {{Session::get('message') }}</p>

					@endif
				<div class="panel-heading">Listado de Usuarios  </div>
				<div class="panel-body">
				
					<p>
					@include('users/search')
					</p>
					
									
		
				<br>
				
				@include('users/table',compact('user'))
				
				</div>

			</div>

		</div>
	</div>
</div>
@endsection
