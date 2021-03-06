<?php

namespace Turismo\Http\Controllers;

use Illuminate\Http\Request;
use Turismo\User;
use Turismo\Http\Requests;
use Turismo\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Turismo\Http\Controllers\Auth;
use Turismo\Http\Requests\EditUserRequest;
use Turismo\hotel;
class HomeController extends Controller
{
    public function index()

    {
    	return view('home');
    }


    public function listUsers(Request $request)
    {
    	$users=User::filtro($request->get('name'));

    	return view('users.list',compact('users'));
    }

    public function editUsers($id)
    {
        
    	$users=User::findOrFail($id);

    	return view('users.edit',compact('users'));
    }
   

    public function updateUsers(EditUserRequest $request, $id)
    {

    	$users=User::findOrFail($id);
   
    	$users->fill($request->all());
    	$users->role=$request->role;
    	$users->save();
    	Session::flash('message',$users->name.' Actualizo datos');

    
    	return redirect('listado-usuarios');
    }

    public function storeVote($id)
    {
        $hotel= hotel::findOrFail($id);
        
        $user=auth()->user();
        $user->vote($hotel);
        return redirect()->back();
       
    }

    public function destroyVote($id)
    {
        $hotel= hotel::findOrFail($id);
        $user=auth()->user();
        $user->unvote($hotel);
        return redirect()->back();
    }
}

