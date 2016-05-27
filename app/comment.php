<?php

namespace Turismo;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
	protected $fillable = ['name','user_id','hotel_id','comment'];

	public function hotel()
	{
	//un comentario esta asociado a un unico hotel
		return $this->belongTo('Turismo\hotel');
	}
    public function user()
    //un comentario esta asociado a un unico usuario
    {
    	return $this->belongsTo('Turismo\User');
    }
}
