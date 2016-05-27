<?php

namespace Turismo;

use Illuminate\Database\Eloquent\Model;

class room extends Model
{
   protected $fillable = ['type','numPerson','numBed','cantidad','price','extra','image','hotel_id'];
   
   public function hotel()
	{

	//habitaciones esta asociado a un unico hotel
		return $this->belongTo('Turismo\hotel');
	}
    
}
