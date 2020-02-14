<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

	public function followers()
    {
        return $this->belongsToMany(User::class);
    }


	 protected $guarded	= [];
     public function user()
     {
     	return $this -> belongsTo(User::class);
     }

}
