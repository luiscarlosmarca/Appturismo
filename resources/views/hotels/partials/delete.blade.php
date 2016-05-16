{!!Form::open (['route'=> ['hotel.destroy', $hotel->id],'method'=>'DELETE'])!!}
<button type="submit" onclick="return confirm('Esta seguro de eliminar este hotel? Tenga en cuenta que va eliminar las habitaciones, comentarios y votos de este hotel.')"class="btn btn-danger">Eliminar hotel</button>
{!! Form::close()!!}