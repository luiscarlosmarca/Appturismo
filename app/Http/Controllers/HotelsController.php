<?php

namespace Turismo\Http\Controllers;

use Illuminate\Http\Request;
use Turismo\hotel;
use Turismo\room;
use Turismo\message;
use Turismo\comment;
use Turismo\h_image;
use Turismo\User;
use \Input as Input;
use Turismo\Http\Requests;
use Turismo\Http\Controllers\Controller;
use Auth;
use Turismo\Http\Requests\CreateHotelRequest;
use Turismo\Http\Requests\CreateImageRequest;
use Turismo\Http\Requests\EditHotelRequest;
use Turismo\Http\Requests\CreateRoomRequest;
use Turismo\Http\Requests\EditRoomRequest;
use Illuminate\Support\Facades\Session;
class HotelsController extends Controller
{
//********* gestion de hoteles

public function miHotel($id)
    {
       $user=User::findOrFail($id);
       return view('hotels/miHotel', compact('user'));
    }

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

  public function store(CreateHotelRequest $request)
    {
        if($request->file('image'))
        {

            $file = $request->file('image');
            $name = 'Appjac_'.time().'.'.$file->getClientOriginalExtension();
            $path = public_path().'/upload/hotels/';
            $file->move($path,$name);
        }
            
        $user=Auth::user()->id;
        $hotels = new hotel($request->all());
        $hotels->user_id=$user;
        $hotels->image=$name;
        $hotels->save();
        
      
      
        Session::flash('message',$hotels->name.'  Fue creado');
        return redirect()->route('hoteles');
               
    }

public function edit($id)
    {
        $hotel=hotel::findOrFail($id);
        return view('hotels/edit',compact('hotel'));
    } 


public function update(EditHotelRequest $request,$id)
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

public function store_room(CreateRoomRequest $request)
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

public function update_room(EditRoomRequest $request, $id)
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
        $hotels=hotel::findOrFail($id);
        return view('hotels/messages/list',compact('hotels'));
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

    /************ Gestion de imagenes */
    public function upload_image($id)

    {
     $hotel=hotel::findOrFail($id);
     return view('hotels/images/upload',compact('hotel'));
    }

    public function store_image(CreateImageRequest $request)
    {
       
        if($request->file('name'))
        {

            $file = $request->file('name');
            $name = 'Appjac_'.time().'.'.$file->getClientOriginalExtension();
            $path = public_path().'/upload/hotels/images/';
            $file->move($path,$name);
        }
            
      
        
        $image = new h_image($request->all());

        $image->name = $name;
      
        $image->save();
      
        Session::flash('message',$image->title.' Imagen agregada éxitosamente');
        return redirect()->back();
    }


}
