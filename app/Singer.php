<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Singer extends Model
{
    protected $table="singer";

     public function musics()
     {
       return $this->hasMany('App\Music');
     }
}
