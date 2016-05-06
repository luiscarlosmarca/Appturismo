<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\hotel;
use Illuminate\Support\Facades\Session;
class hotel extends Model
{

  protected $fillable = ['details','name','phone','address','image','email','website','estracto','nivelAcademico','foto'];


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

   	 	return $this->belongsToMany('\App\User','hotel_users');
     		 
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
        
        
        ->orderBy('created_at','ASC')
        ->paginate(5);
  }
}
