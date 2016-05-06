<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hotel_user extends Model
{
   public function hotel()
	{
	//un voto pertenece a un unico hotel
		return $this->belongTo('App\hotel');
	}
    public function user()
    //un voto pertence  a un unico usuario
    {
    	return $this->belongsTo('App\User');
    }
}
