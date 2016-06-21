<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class Year extends Model
{
    public function nextProjectNumber() {
		
		$currentYear = Year::where('value', '=', Carbon::now()->format('y'))->first();
		if(empty($currentYear)) {
			
			$this->value = Carbon::now()->format('y');
			$this->save();
			return 1;
		} else {
			
			$projectCount = count($currentYear->values);
			return $projectCount + 1;
		}
    }
	
	public function values() {
		
		return $this->belongsToMany('\App\Count');
	}
}
