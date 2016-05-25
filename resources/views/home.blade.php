@extends('layout')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Has iniciado sesion</div>
				<div class="panel-body">
				Welcome to turistiando 1.0

				
				<a class="btn btn-primary btn-lg" href="{{route('miHotel.detail',Auth::user()->id)}}" role="button">Ver mi Hotel</a>
				
			</div>
		</div>
	</div>
</div>
@endsection
