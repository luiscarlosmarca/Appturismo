{!!Form::open (['route'=> ['hotel.destroyroom', $room->id],'method'=>'DELETE'])!!}
<button type="submit" onclick="return confirm('Esta seguro de eliminar esta habitación?.')"class="btn btn-danger"> <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Eliminar Habitación</button>
{!! Form::close()!!}