<table class="table table-hover" >
 			<tr>
 								
 				 <th><b><font color=#2D4259 size="4" face="Lucida grande"> Nombre </th>
 				 <th><font color=#2D4259 size="4" face="Lucida grande"> email</th>
 				
 								
 				<th><font color=#2D4259 size="4" face="Lucida grande"> Rol</th>
				<th><font color=#2D4259 size="4" face="Lucida grande"> Editar</th>
								
 								

 							
 			</tr>
 								
 			@foreach($users as $user)
 			<tr>
 					<td>{{$user->name}}</td>
 					<td>{{$user->email}}</td>
 					<td>{{$user->role}}</td>
 					<td> <a href="{{route('edit.users',$user->id)}}"class="btn btn-primary">
						Editar Usuario
					</a></td>
 				  
 								
 			</tr>
 			@endforeach
 				
 		
 </table>

{!!$users->render()!!}