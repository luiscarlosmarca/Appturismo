<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hotel extends Model
{


   public function hotelero()
   {
   	//un hotel es propiedad de un usuario u hotelero
   	return $this->belongTo('App\User');
   }

   public function comments()
   {
   	//Un hotele puede ser comentado muchas veces
   	return $this->hasMany('App\comment');

   }
  
  public function rooms()
   {
   	//Un hotele puede ser comentado muchas veces
   	return $this->hasMany('App\room');

   }
  

   public function users()
   {

   	 	return $this->belongsToMany('\App\User','hotel_user');
     		 
	} 
}
