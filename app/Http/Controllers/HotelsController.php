<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\hotel;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class HotelsController extends Controller
{

public function index()
    {
        $hotels=hotel::orderBy('created_at','DESC')->get();
    	return view('hotels/list', compact('hotels'));
    }

public function popular()
    {
    	return view('hotels/list');
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
      
     dd($request->all());
    }

public function create_room()

    {
     return view('hotels/rooms/create');
    }

 public function store_room(Request $request)
    {
      
     dd($request->all());
    }
}
