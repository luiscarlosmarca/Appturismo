<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class message extends Model
{
    public function hotel()
	{
	//un mensaje esta asociado a un unico hotel
		return $this->belongTo('App\hotel');
	}
    
}
