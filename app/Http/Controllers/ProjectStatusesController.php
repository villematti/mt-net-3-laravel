<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProjectStatusesController extends Controller
{
    public function index() {
    	
		$statuses = \App\ProjectStatus::all();
		
		return view('projectStatuses.index')->with('statuses', $statuses);
    }
	
	public function create() {
		
		return view('projectStatuses.create');
	}
	
	public function store(Request $request) {
		
		$projectType = new \App\ProjectStatus;
		
		$projectType->name = $request->name;
		
		$projectType->save();
		
		return redirect('/project-statuses');
	}
	
	public function delete($id) {
		
		// Prevent deletion if there is a project associated with this status.
		if(empty(\App\Project::where('projectStatus_id', '=', $id)->first())) {
			$status = \App\ProjectStatus::where('id', '=', $id)->first();
			$status->delete();
			return back();
		} else {
			return back();
		}
		
		
		
	}
}
