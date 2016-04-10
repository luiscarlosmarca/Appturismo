<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{

	public function hotel()
	{
	//un comentario esta asociado a un unico hotel
		return $this->belongTo('App\hotel');
	}
    public function user()
    //un comentario esta asociado a un unico usuario
    {
    	return $this->belongsTo('App\User');
    }
}
