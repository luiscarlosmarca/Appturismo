<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\hotel;
use App\room;
use App\message;
use App\comment;
use \Input as Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Support\Facades\Session;
class HotelsController extends Controller
{
//********* gestion de hoteles
public function index(Request $request)
    {
        $hotels=hotel::filtro($request->get('name'));
    	return view('hotels/list', compact('hotels'));

    }

public function popular()
    {
        dd("hoteles populares");
    }
public function details($id)
    {
    	$hotel=hotel::findOrFail($id);
        return view('hotels/details',compact('hotel'));
    }

public function create()

    {
     return view('hotels/create');
    }

 public function store(Request $request)
    {
        if(Input::hasFile('image'))
        {

            $file = Input::file('image');
            $file->move('upload',$file->getClientOriginalName());
            $image='img src="/upload/'.$file->getClientOriginalName().'"';
            $user=Auth::user()->id;
            $hotels = new hotel($request->all());
            $hotels->image=$file->getClientOriginalName();
            $hotels->user_id=$user;
            $hotels->save();
       
      
                Session::flash('message',$hotels->nombre.' Fue creado');
            
                return redirect()->route('hoteles');
        }

        $user=Auth::user()->id;
        $hotels = new hotel($request->all());
        $hotels->user_id=$user;
        $hotels->save();
             
        Session::flash('message',$hotels->nombre.' Fue creado');
                
        return redirect()->route('hoteles');
    }

public function edit($id)
    {
        $hotel=hotel::findOrFail($id);
        return view('hotels/edit',compact('hotel'));
    } 


public function update(Request $request,$id)
    {
          
        $hotel=hotel::findOrFail($id);
          
       
        $hotel->fill($request->all());
        $hotel->save();

        Session::flash('message',$hotel->name.' Se actualizo');
        return redirect()->route('hoteles');

    } 
public function destroy($id)
    {
        $hotel = hotel::find($id);
 
        $hotel->delete();
 
        Session::flash('message',$hotel->name.' hotel eliminado');
        return redirect()->route('hoteles');
    } 

 /////**********Gestion de Habitaciones

public function create_room($id)

    {
     $hotel=hotel::findOrFail($id);
           
     return view('hotels/rooms/create',compact('hotel'));
    }

 public function store_room(Request $request)
    {

      if(Input::hasFile('image'))
        {
            $file=Input::file('image');
            $file->move('upload/room/',$file->getClientOriginalName());
            $image='img src="/upload/room/'.$file->getClientOriginalName().'"';
            $rooms= new room($request->all());
            $rooms->image=$file->getClientOriginalName();
            $rooms->save();
            Session::flash('message'.'Fue creada una habitacion de tipo: ',$rooms->type);
           return redirect()->route('hotel.detail',$rooms->hotel_id);

        }
        $rooms= new room($request->all());
       
        $rooms->save();
        Session::flash('message'.'Fue creada una habitacion de tipo: ',$rooms->type);
       return redirect()->route('hotel.detail',$rooms->hotel_id);
   
    }
public function edit_room($id)
    {
        $room=room::findOrFail($id);
        return view('hotels/rooms/edit',compact('room'));
    }

public function update_room(Request $request, $id)
    {

    $room=room::findOrFail($id);
    
    $room->fill($request->all());
    $room->save();

    Session::flash('message'.'Fue actualizada la habitacion tipo: ',$room->type);
     return redirect()->route('hotel.detail',$room->hotel_id);
           
    } 

public function destroy_room($id)
    {
        $room = room::find($id);
 
        $room->delete();
 
         Session::flash('message',$room->type.'Habitación eliminada');
        return redirect()->route('hotel.detail',$room->hotel_id);
    } 

//**Gestion de mensajes ***/////
public function create_message($id)

    {
     $hotel=hotel::findOrFail($id);
     return view('hotels/messages/create',compact('hotel'));
    }

 public function store_message(Request $request)
    
    {
     $messages=new message($request->all());
     $messages->save();
     Session::flash('message'.'El mensaje fue enviado',$messages->namespace);
      return redirect()->route('hotel.detail',$messages->hotel_id);
    }


public function verMensajes($id)//fall
    {
        $messages=message::findOrFail($id);
        return view('hotels/messages/list',compact('messages'));
    }

    /****Gestion de Comentarios*/
public function store_comment(Request $request)
    
    {
     $comments=new comment($request->all());
     $user=Auth::user()->id;
     $comments->user_id=$user;
     $comments->save();
     return redirect()->back();
    }

}
