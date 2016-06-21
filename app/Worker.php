<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
	protected $fillale = ['name', 'passCode'];
	
    function jobs() {
    	
		return $this->hasMany('App\Job');
    }
}
