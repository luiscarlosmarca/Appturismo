<?php

namespace Turismo;

use Illuminate\Database\Eloquent\Model;

class message extends Model
{

	 protected $fillable = ['message','name','hotel_id','email','matter','phone'];
    public function hotel()
	{
	//un mensaje esta asociado a un unico hotel
		return $this->belongTo('Turismo\hotel');
	}
    
}
