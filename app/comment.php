<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
	protected $fillable = ['name','user_id','hotel_id','comment'];

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
