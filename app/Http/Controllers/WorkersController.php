<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;
use App\Worker;
use App\Http\Requests;

class WorkersController extends Controller
{
    public function show(Worker $worker) {
		
		$currentDate = Carbon::now()->format('y');
		
		$year = $currentDate;
		
		return view('workers.show')->with('worker', $worker)->with('year', $year);
    }
}
