@extends('layout')

@section('content')
<div class="container-fluid">
	<div class="row">


		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
					@if (Session::has('message'))

							<p class="alert alert-info"> {{Session::get('message') }}</p>

					@endif
				<div class="panel-heading">Hoteles de Puerto Salgar  </div>
				<div class="panel-body">
				<div class="alert alert-info" role="alert">
					<a href="{{route('hotels.create')}}"class="btn btn-primary">
						Crear un nuevo Hotel
					</a>
				</div>
					<p>
					@include('hotels/partials/search')
					</p>
					{!!$hotels->render()!!}
					
					

			
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
