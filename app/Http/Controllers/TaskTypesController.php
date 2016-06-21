<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TaskTypesController extends Controller
{
    public function index() {
    	
		$taskTypes = \App\TaskType::all();
		
		return view('taskTypes.index')->with('taskTypes', $taskTypes);
    }
	
	public function create() {
		
		return view('taskTypes.create');
		
	}
	
	public function store(Request $request) {
		
		$taskType = new \App\TaskType;
		
		$taskType->name = $request->name;
		$taskType->save();
		
		return redirect('/task-types');
		
	}
	
	public function delete($id) {
		
		if(empty(\App\Job::where('taskType_id', '=', $id)->first())) {
			$taskType = \App\TaskType::where('id', '=', $id);
			$taskType->delete();
			
			return back();
		} else {
			return back();
		}
	}
}
