<?php

namespace Turismo;

use Illuminate\Database\Eloquent\Model;

class h_image extends Model
{
    protected $table ="h_images";

   protected $fillable=['name','hotel_id','title'];

   public function hotel()
   {
   	return $this->belongsTo('Turismo\hotel');
   }
}
