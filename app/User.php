<?php

namespace Turismo;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Turismo\User;
use Turismo\hotel;
use Illuminate\Support\Facades\Session;
class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function hotels()
    {
        // un usuario es propietario de muchos hoteles
        return $this->hasMany('Turismo\hotel');
    }

    public function voted()
    {
        //un usuario ha votado por muchos hoteles
        return $this->belongsToMany('Turismo\hotel','hotel_users')->withTimestamps();

    }

    public function scopeName($query,$name)
    {
  
    if (trim($name) != "")
    {
        $query->where(\DB::raw("CONCAT(name)"),"LIKE","%$name%");
        Session::flash('message','Nombre:'.' '.$name.'  ' .'Resultado de la busqueda'); 
     }
        
    }

      public function setPasswordAttribute($value)
    {
        if ( ! empty($value))
        {
            $this->attributes['password']=bcrypt($value);
        }
    }

    public function hasVote(hotel $hotel)//para saber si el usuario ya voto por el hotel
    {
        return $this->voted()->where('hotel_id', $hotel->id)->count();
    }
    
    public function vote(hotel $hotel)//para que el usuario vote
    {
        if($this->hasVote($hotel)) return false;// si el usuario ya voto, false
        $this->voted()->attach($hotel);
        return true;

    }
    public function unvote(hotel $hotel)
    {
        $this->voted()->detach($hotel);
    }

    public function admin()
    {
        return $this->role ==='admin';
    }

    public function hotelero()
    {
        return $this->role ==='hotelero';
    }

    public function user()
    {
        return $this->role ==='user';
    }
    public static function filtro($name)
     {
          return User::name($name)
            
            
            ->orderBy('created_at','ASC')
            ->paginate(10);
     }

    
}
