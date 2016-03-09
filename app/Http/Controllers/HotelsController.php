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
    	dd('details: '. $id);
    }

}
