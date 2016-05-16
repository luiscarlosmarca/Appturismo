<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

use App\Http\Requests\EditUserRequest;
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
}

