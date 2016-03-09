@extends('layout')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Hoteles de Puerto Salgar </div>
				<div class="panel-body">
				<div class="alert alert-info" role="alert">Numero de hoteles</div>
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
