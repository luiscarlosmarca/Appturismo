<?php

namespace Turismo;

use Illuminate\Database\Eloquent\Model;

class hotel_user extends Model
{
   public function hotel()
	{
	//un voto pertenece a un unico hotel
		return $this->belongTo('Turismo\hotel');
	}
    public function user()
    //un voto pertence  a un unico usuario
    {
    	return $this->belongsTo('Turismo\User');
    }
}
