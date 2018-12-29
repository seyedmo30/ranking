<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    
    public function music()
    {
      return $this->beLongsTO('App\Music');
    }

}
