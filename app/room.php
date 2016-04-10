<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class room extends Model
{
   public function hotel()
	{
	//un comentario esta asociado a un unico hotel
		return $this->belongTo('App\hotel');
	}
    
}
