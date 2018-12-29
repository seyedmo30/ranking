<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    public function singer()
    {
      return $this->beLongsTO('App\Singer');
    }

	public function comments()
	{
		return $this->hasMany(Comment::class);
		
	}
}
