<?php

namespace Turismo;

use Illuminate\Database\Eloquent\Model;
use Turismo\hotel;
use Illuminate\Support\Facades\Session;
class hotel extends Model
{

  protected $fillable = ['details','name','phone','address','image','email','website','estracto','nivelAcademico','foto'];


   public function hotelero()
   {
   	//un hotel es propiedad de un usuario u hotelero
   	return $this->belongTo('Turismo\User');
   }

   public function comments()
   {
   	//Un hotele puede ser comentado muchas veces
   	return $this->hasMany('Turismo\comment');

   }

     public function messages()
   {
    //Un hotele puede tener muchos mensajes
    return $this->hasMany('Turismo\message');

   }
   
   public function images()
  //las coleccion de imagenes de cada hotel
  {
      return $this->hasMany('Turismo\h_image');
  }

  
  public function rooms()
   {
   	//Un hotele puede ser comentado muchas veces
   	return $this->hasMany('Turismo\room');

   }
  

   public function users()
   {

   	 	return $this->belongsToMany('\Turismo\User','hotel_users');
     		 
	} 


  public function scopeName($query,$name)
  {
  
    if (trim($name) != "")
    {
    $query->where(\DB::raw("CONCAT(name)"),"LIKE","%$name%");
    Session::flash('message','Nombre:'.' '.$name.'  ' .'Resultado de la busqueda'); 
    }
    
  }

  public static function filtro($name)
  {
      return hotel::name($name)
        
        
        ->orderBy('created_at','DESC')
        ->paginate(5);
  }
}
