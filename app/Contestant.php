<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contestant extends Model
{
    
	protected $fillable=['name','description','image'];
	
    public function user()
    {
    	
    	return $this->hasMany(User::class);
    }
}
