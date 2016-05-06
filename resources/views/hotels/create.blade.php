@extends('layout')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading"><h1>Creando un Nuevo hotel</h1> </div>
				<div class="panel-body">
					@if (Session::has('message'))

					<p class="alert alert-info"> {{Session::get('message') }}</p>

					@endif
						{!!Form::open(['route'=>'hotels.create','method'=>'POST','enctype'=>'multipart/form-data'])!!}

									@include('hotels.partials.fields')

								<p>
									<button type="submit" class="btn btn-primary">
										Crear hotel
									</button>

								</p>
						{!! Form::close() !!}

				</div>
			</div>
		</div>
	</div>
</div>
@endsection
