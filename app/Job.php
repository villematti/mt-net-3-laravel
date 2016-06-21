<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = ['desscription', 'bigVisit', 'endTime'];
	
	function project() {
		
		return $this->belongsTo('\App\Project');
		
	}
	
	function taskType() {
		
		return $this->belongsTo('\App\TaskType', 'taskType_id');
	}
}
