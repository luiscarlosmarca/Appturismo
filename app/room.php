<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class room extends Model
{
   protected $fillable = ['type','numPerson','numBed','price','extra','image','hotel_id'];
   
   public function hotel()
	{

	//habitaciones esta asociado a un unico hotel
		return $this->belongTo('App\hotel');
	}
    
}
