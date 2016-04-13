@extends('layout')

@section('content')
<div class="container-fluid">
	<div class="row">


		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Hoteles de Puerto Salgar  </div>
				<div class="panel-body">
				<div class="alert alert-info" role="alert">
					<a href="{{route('hotels.create')}}"class="btn btn-primary">
						Crear un nuevo Hotel
					</a>
					<a href="{{route('hotels.createroom')}}"class="btn btn-primary">
						Crear una Habitación
					</a>

				</div>
				<br>
				@foreach($hotels as $hotel)
				@include('hotels/partials/item',compact('hotel'))
				@endforeach
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
