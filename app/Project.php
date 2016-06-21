<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['name', 'version'];
	
	function type() {
		
		return $this->belongsTo('\App\ProjectType', 'projectType_id');
	}
	
	function status() {
		
		return $this->belongsTo('\App\ProjectStatus', 'projectStatus_id');
	}
	
	function number() {
		
		return $this->belongsTo('\App\Count', 'count_id');
	}
}
